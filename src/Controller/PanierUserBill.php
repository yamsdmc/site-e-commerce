<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Panier;
use App\Entity\Product;
use App\Entity\UserInfo;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Dompdf\Dompdf;
use Dompdf\Options;



class PanierUserBill extends AbstractController
{
    public function  __invoke(Panier $data,  ObjectManager $manager, \Swift_Mailer $mailer) 
    {
        
        $repoorder =  $this->getDoctrine()->getRepository(Panier::class)->findBy(["userId" => $data->getUserId(), "passedAt" => $data->getPassedAt()]);
        $orders = [];

        $alldetails = [];
        
        if ($repoorder[0]) {
        foreach( $repoorder as $key => $order) {
            if( $order->getPassedAt() === null ) {
                unset($repoorder[$key]);
            } else {
                    $products = [];
                    $product = [];
                    $repoproduct =  $this->getDoctrine()->getRepository(Product::class)->find($order->getProductId());
                    $product["title"] = $order->getTitle();
                    $product["picture"] = $repoproduct->getPicture();
                    $product["price"] = $order->getPrice();
                    $product["quantity"] = $order->getQuantity();
                    $product["weight"] = $order->getWeight();
                    $product["done"]= $order->getDone();
                    $product["final"]= $order->getFinal();
                    $date = $order->getPassedAt()->format('Y-m-d H:i:s');
                    array_push($products, $product);
                if (array_key_exists($date, $orders)) {
                    array_push($orders[$date],$product);
                } else {
                    $orders[$date] = $products;
                }
            }
        }
           $neworders = [];
           $dates = [];
           $status = [];
           $final = [];
           foreach ($orders as $key => $order ) {
                
                array_push($neworders, $order);
                $pushdate = str_replace(" ", " à ", $key);
                array_push($dates, "Commande passée le ". $pushdate);
           }
           $countdone = 0;
        foreach ($neworders as $order ) {
                    
                     $priceorder = 0; 
                     $quantityorder = 0; 
                     $colisorder = 0;  
                            foreach ($order as  $detailproducts ){
                                foreach ($detailproducts as $key => $detailproduct ) {
                                    if ($key === "price") {
                                        $priceorder += $detailproduct;
                                    } elseif ($key === "quantity") {
                                        $quantityorder += $detailproduct;
                                    }  elseif ($key === "weight") {
                                        $colisorder += $detailproduct;
                                    } elseif ($key === "done") {
                                        $status[$countdone] = $detailproduct;
                                    }  elseif ($key === "final") {
                                        $final[$countdone] = $detailproduct;
                                    }
                                }
                            }
                     $details = [];
                     $details["totalprice"] = $priceorder; 
                     $details["totalquantity"] = $quantityorder; 
                     $details["totalcolis"] = ceil($colisorder/6); 
                     array_push($alldetails , $details);
                     $countdone ++;
        }
    }  
        $repouser = $this->getDoctrine()->getRepository(UserInfo::class)->findBy(["userId" => $data->getUserId()]);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);    
        $html =    $this->renderView(
            'emails/facture.html.twig',
            ['paniers' => $neworders[0] , 'dates' => $dates[0], 'final' => $final[0] ]
        );
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $output = $dompdf->output();
        $publicDirectory = $this->getParameter('kernel.project_dir') . '/public/bills';
        $pdfFilepath =  $publicDirectory . '/'.$data->getUserId().'-'.$data->getPassedAt()->format('Y-m-d').'.pdf';
        file_put_contents($pdfFilepath, $output);

        $message = (new \Swift_Message('Facture de votre commande du  '.$data->getPassedAt()->format('Y-m-d H:i:s').''))
        ->setFrom('service.goodbuy75@gmail.com')
        ->setTo($repouser[0]->getAccountFree())
        ->setBody(
            $this->renderView(
                'emails/facture.html.twig',
                ['paniers' => $neworders[0] , 'dates' => $dates[0], 'final' => $final[0] ]
            ),
            'text/html'
        )
        ->attach(\Swift_Attachment::fromPath($publicDirectory . '/'.$data->getUserId().'-'.$data->getPassedAt()->format('Y-m-d').'.pdf'));
        $mailer->send($message);
        $alldelivery = $this->get('serializer')->serialize('Facture envoye', 'json');
        $response = new Response($alldelivery);
        $response->headers->set('Content-Type', 'application/json');
        return $response;    
    }
}

