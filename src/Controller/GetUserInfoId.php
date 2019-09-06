<?php

namespace App\Controller;

use App\Entity\UserInfo;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class GetUserInfoId extends AbstractController
{
    public function  __invoke($id)
    {
        $repoinfo = $this->getDoctrine()->getRepository(UserInfo::class)->findBy(["userId" => $id ]);   
        $alldetails = $this->get('serializer')->serialize($repoinfo, 'json');
        $response = new Response($alldetails);
        $response->headers->set('Content-Type', 'application/json');
        return $response;    
    }
}

