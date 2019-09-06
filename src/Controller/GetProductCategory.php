<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\SubCategory;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetProductCategory extends AbstractController
{
    public function  __invoke(Category $category)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $reposubcategory = $this->getDoctrine()->getRepository(SubCategory::class)->findBy(['categoryId' => $category->getId()]);
        $product = $repo->findBy(['categoryId' => $category->getId()]);
        $breadcrumbs = [ "nameCategory" => $category->getName()];
        $breadcrumbs["idCategory"] = $category->getId();
        $subname = [];
        $subid = [];
        foreach($reposubcategory as $subobject ) {
             array_push($subname, $subobject->getName());
             array_push($subid, $subobject->getId());
        }
        $breadcrumbs["nameSubCategory"] = $subname ;
        $breadcrumbs["idSubCategory"] = $subid ;
        $product = $this->get('serializer')->serialize([$product, $breadcrumbs], 'json');
        $response = new Response($product);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}

