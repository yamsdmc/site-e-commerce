<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\SubCategory;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class FillProductId extends AbstractController
{
    public function  __invoke( $data, ObjectManager $manager, $id)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $initalstock =  $repo->getStock();
        $repo->setStock( $initalstock + $data->getStock());
        $manager->persist($repo);
        $manager->flush();
        $product = $this->get('serializer')->serialize($repo , 'json');
        $response = new Response($product);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}

