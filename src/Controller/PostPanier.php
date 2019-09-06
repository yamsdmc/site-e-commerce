<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Panier;
use App\Entity\Product;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class PostPanier extends AbstractController
{
    public function  __invoke(Panier $data, ObjectManager $manager)
    {
        if ($data->getUserId() === null) {
            $repopanier = $this->getDoctrine()->getRepository(Panier::class)->findBy(["token" => $data->getToken(), "productId" => $data->getProductId(), "passedAt" => null ]);
        } elseif ($data->getToken() ===null || $data->getToken() === '') {
            $repopanier = $this->getDoctrine()->getRepository(Panier::class)->findBy(["userId" => $data->getUserId(), "productId" => $data->getProductId(), "passedAt" => null ]);
        }
        if (isset($repopanier) && isset($repopanier[0])) {
           $initialquantity = $repopanier[0]->getQuantity();
           $initialweight = $repopanier[0]->getWeight();
           $initialprice = $repopanier[0]->getPrice();
           $repopanier[0]->setQuantity($initialquantity + $data->getQuantity());
           $repopanier[0]->setWeight($initialweight + $data->getWeight());
           $repopanier[0]->setPrice($initialprice + $data->getPrice());
           $manager->persist($repopanier[0]);
           $manager->flush();
           $alldetails = $this->get('serializer')->serialize($repopanier[0], 'json');
           $response = new Response($alldetails);
           $response->headers->set('Content-Type', 'application/json');
           return $response;    
        } else {
            $data->setPassedAt(null);
            $data->setDone(false);
            $data->setFastDelivery(false);
            $manager->persist($data);
            $manager->flush();
            $alldetails = $this->get('serializer')->serialize($data, 'json');
            $response = new Response($alldetails);
            $response->headers->set('Content-Type', 'application/json');
            return $response;    
        } 
    }
}