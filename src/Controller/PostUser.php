<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserInfo;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class PostUser extends AbstractController
{
    public function  __invoke(User $data,  ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $repo = $this->getDoctrine()->getRepository(User::class);
        $user = $repo->findBy(['email' => $data->getEmail()]);
        $message = [];
        if ( isset($user[0])) {
        } else {
            $user = new User;
            $hash = $encoder->encodePassword($data, $data->getPassword());
            $user->setPassword($hash);
            $user->setEmail($data->getEmail());
            $user->setRole($data->getRole());
            $manager->persist($user);
            $manager->flush();
            $userinfo = new UserInfo;
            $userinfo->setUserId($user->getId());
            $manager->persist($userinfo);
            $manager->flush();
            $user= $this->get('serializer')->serialize($user, 'json');
            $response = new Response($user);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
       
    }
}
