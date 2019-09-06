<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetTrends extends AbstractController
{
    public function  __invoke()
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $populaires = $repo->findBy([],['sells' => 'DESC']);
        $bestrating = $repo->findBy([],['rating' => 'DESC']);
        $populaires = array_slice($populaires, 0 , 3);
        $bestrating = array_slice($bestrating, 0 , 3);
        $trends = $this->get('serializer')->serialize([$populaires, $bestrating ], 'json');
        $response = new Response($trends);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}

