<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\SubCategory;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetSubProductCategory extends AbstractController
{
    public function  __invoke(SubCategory $subcategory)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $repocategory = $this->getDoctrine()->getRepository(Category::class)->find($subcategory->getCategoryId());
        $product = $repo->findBy(['subCategoryId' => $subcategory->getId() , 'categoryId' => $subcategory->getCategoryId()]);
        $breadcrumbs = [ "nameCategory" => $repocategory->getName()];
        $breadcrumbs["idCategory"] =  $repocategory->getId();
        $breadcrumbs[ "nameSubCategory"] = $subcategory->getName();
        $breadcrumbs [ "idSubCategory"] = $subcategory->getId();
        $product = $this->get('serializer')->serialize([$product, $breadcrumbs], 'json');
        $response = new Response($product);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
