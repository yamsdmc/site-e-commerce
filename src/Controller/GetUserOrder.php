<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetUserOrder extends AbstractController
{
    public function  __invoke($id,  ObjectManager $manager) 
    {

        $repoorder =  $this->getDoctrine()->getRepository(Panier::class)->findBy(["userId" => $id]);
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
                    $product["date"]= $order->getPassedAt()->format('Y-m-d H:i:s');
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
           $bill = [];
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
                                    }  elseif ($key === "date") {
                                        $bill[$countdone] = $detailproduct;
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
        $alldelivery = $this->get('serializer')->serialize([$neworders , $alldetails, $dates , $status , $final,  $bill], 'json');
        $response = new Response($alldelivery);
        $response->headers->set('Content-Type', 'application/json');
        return $response;    
    }
}

