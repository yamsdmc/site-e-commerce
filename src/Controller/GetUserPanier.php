<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetUserPanier extends AbstractController
{
    public function  __invoke($id,  ObjectManager $manager)
    {
        if ( strlen($id)> 30 )  {
         $repopanier = $this->getDoctrine()->getRepository(Panier::class)->findBy(["token" => $id, "done" => false, "passedAt" => null ]);
        } else {
        $repopanier = $this->getDoctrine()->getRepository(Panier::class)->findBy(["userId" => $id, "done" => false, "passedAt" => null ]);
        }
        $totalprice = 0;
        $totalquantity = 0;
        $totalweight = 0;
        $stockproduct = [];
        foreach ($repopanier as $product) {
                $repoproduct = $this->getDoctrine()->getRepository(Product::class)->find($product->getProductId());
                array_push($stockproduct, $repoproduct->getStock());
                $totalprice += $product->getPrice();
                $totalquantity += $product->getQuantity();
                $totalweight += $product->getWeight();
        }
        $detailspanier["quantity"] = $totalquantity; 
        $detailspanier["price"] = $totalprice;  
        $detailspanier["nombreColis"] = ceil($totalweight/6);      
        $alldetails = $this->get('serializer')->serialize([$repopanier, $detailspanier, $stockproduct], 'json');
        $response = new Response($alldetails);
        $response->headers->set('Content-Type', 'application/json');
        return $response;    
    }
}

