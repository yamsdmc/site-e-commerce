<?php

namespace App\Controller;

use App\Entity\Promo;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class CheckPromo extends AbstractController
{
    public function  __invoke(Promo $data)
    {
        $repopromo = $this->getDoctrine()->getRepository(Promo::class)->findBy(['code' => $data->getCode()]); 
        $promo = $this->get('serializer')->serialize($repopromo, 'json');
        $response = new Response($promo);
        $response->headers->set('Content-Type', 'application/json');
        return $response;     
    }
}