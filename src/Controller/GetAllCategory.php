<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\SubCategory;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetAllCategory extends AbstractController
{
    public function  __invoke()
    {
        $repocategories = $this->getDoctrine()->getRepository(Category::class);
        $reposub = $this->getDoctrine()->getRepository(SubCategory::class);
        $categories = $repocategories->findAll();
        $subcategories = [];
        foreach($categories as $categorie) {
           $subcat = $reposub->findBy(['categoryId' => $categorie->getId()]);
           array_push($subcategories, $subcat);
        }
        $categories = $this->get('serializer')->serialize([$categories, $subcategories ], 'json');
        $response = new Response($categories);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}

