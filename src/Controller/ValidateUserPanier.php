<?php

namespace App\Controller;

use DateTimeInterface;
use App\Entity\User;
use App\Entity\UserInfo;
use App\Entity\Panier;
use App\Entity\Product;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ValidateUserPanier extends AbstractController
{
    public function  __invoke( UserInfo $data, ObjectManager $manager, \Swift_Mailer $mailer)
    {
        \Stripe\Stripe::setApiKey('sk_test_p6n7otlke8C0bZ3wAigUOy3w00Y4za6BP7');
        $charge = \Stripe\Charge::create([
            'amount' => $data->getVisaExp()*100,
            'currency' => 'eur',
            'description' => 'Example charge',
            'source' => $data->getVisaNumber(),
        ]);

        $repoproduct = $this->getDoctrine()->getRepository(Product::class);

        if ( strlen($data->getToken())> 30 ) {
            $repopanier = $this->getDoctrine()->getRepository(Panier::class)->findBy(["token" => $data->getToken() , "passedAt" => null ]);
        } else {
            $repopanier = $this->getDoctrine()->getRepository(Panier::class)->findBy(["userId" => $data->getUserId(),  "passedAt" => null]);
        }        
        $time = new \DateTime();
        foreach ($repopanier as $product) {
                $product->setDone(true);
                $product->setPassedAt($time);
                $product->setFinal($data->getVisaExp());
                $manager->persist($product);
                $manager->flush();

                $selling = $repoproduct->find($product->getProductId());
                $initialsells = $selling->getSells();
                $initialstock = $selling->getStock();
                $selling->setSells($initialsells+$product->getQuantity());
                $selling->setStock($initialstock-$product->getQuantity());
                $manager->persist($selling);
                $manager->flush();
        }  
        if ( strlen($data->getToken()) > 30 ) {
            $message = (new \Swift_Message('Recapitulatif de votre commande ,'.$time->format('Y-m-d H:i:s').''))
            ->setFrom('service.goodbuy75@gmail.com')
            ->setTo($data->getAccountFree())
            ->setBody(
                $this->renderView(
                    'emails/recapitulatif.html.twig',
                    ['paniers' => $repopanier , 'infos' => $data , 'final' => $data->getVisaExp() ]
                ),
                'text/html'
            );
            $mailer->send($message);
        } else {
            // $repouser = $this->getDoctrine()->getRepository(User::class)->find($data->getUserId());
            $message = (new \Swift_Message('Recapitulatif de votre commande ,'.$time->format('Y-m-d H:i:s').''))
            ->setFrom('service.goodbuy75@gmail.com')
            ->setTo($data->getAccountFree())
            ->setBody(
                $this->renderView(
                    'emails/recapitulatif.html.twig',
                    ['paniers' => $repopanier , 'infos' => $data , 'final' => $data->getVisaExp() ]
                ),
                'text/html'
            );
            $mailer->send($message);
        }
        $alldetails = $this->get('serializer')->serialize($repopanier, 'json');
        $response = new Response($alldetails);
        $response->headers->set('Content-Type', 'application/json');
        return $response;    
    }
}

