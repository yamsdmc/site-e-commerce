<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\SubCategory;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetProductId extends AbstractController
{
    public function  __invoke(Product $data,  ObjectManager $manager)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $repocategory = $this->getDoctrine()->getRepository(Category::class)->find($data->getCategoryId());
        $reposubcategory = $this->getDoctrine()->getRepository(SubCategory::class)->find($data->getSubCategoryId());
        $view = $data->getVues();
        $view++;
        $product = $repo->findBy(['id' => $data->getId()]);
        $product[0]->setVues($view);
        if ($product[0]->getSold() !== null ) {
            $product[0]->setAfterSold($product[0]->getPrice()-(($product[0]->getPrice()*$product[0]->getSold())/100));
        }
        $manager->persist($product[0]);
        $manager->flush();
        $breadcrumbs = [ "nameCategory" => $repocategory->getName(),
                         "idCategory" => $repocategory->getId() ,
                         "nameSubCategory" => $reposubcategory->getName() ,
                         "idSubCategory" => $reposubcategory->getId() ];
        $product = $this->get('serializer')->serialize([$product, $breadcrumbs] , 'json');
        $response = new Response($product);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}

