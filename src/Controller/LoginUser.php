<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Panier;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class LoginUser extends AbstractController
{
    public function  __invoke(User $data, Request $request, UserPasswordEncoderInterface $encoder, ObjectManager $manager)
    {
        $repo = $this->getDoctrine()->getRepository(User::class);
        $user = $repo->findBy(['email' => $data->getEmail()]);
        if ( isset($user[0])) {
            if (password_verify($data->getPassword(), $user[0]->getPassword())) {
                $repopanier = $this->getDoctrine()->getRepository(Panier::class)->findBy(["token" => $data->getToken()]);
                if (isset($repopanier[0])) {
                    foreach ($repopanier as $product) {
                        $product->setToken('');
                        $product->setUserId($user[0]->getId());
                        $manager->persist($product);
                        $manager->flush();
                    }
                }
                $user= $this->get('serializer')->serialize($user, 'json');
                $response = new Response($user);
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
        } else { }
       
    }
}
