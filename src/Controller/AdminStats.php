<?php

namespace App\Controller;

use DateTimeInterface;
use App\Entity\Panier;
use App\Entity\Product;
use App\Entity\User;
use App\Entity\UserInfo;
use App\Entity\Category;
use App\Entity\SubCategory;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class AdminStats extends AbstractController
{
    public function  __invoke()
    {
        $time = new \DateTime();
        $repouser = $this->getDoctrine()->getRepository(User::class)->findAll();
        $repocategory = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $repouserinfo = $this->getDoctrine()->getRepository(UserInfo::class)->findAll();
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1','Id Utilisateur');
        $sheet->setCellValue('B1','Email Utilisateur');
        $sheet->setCellValue('C1','Role Utilisateur');
        
        foreach($repouser as $key => $user) {
            $position = $key+2;
            $sheet->setCellValue('A'.$position, $user->getId());
            $sheet->setCellValue('B'.$position, $user->getEmail());
            $sheet->setCellValue('c'.$position, $user->getRole()[0]);
        }

        $sheet->setCellValue('E1','Id Categorie');
        $sheet->setCellValue('F1','Nom Categorie');
        $sheet->setCellValue('G1','Description Categorie');
        foreach($repocategory as $key => $category) {
            $position = $key+2;
            $sheet->setCellValue('E'.$position, $category->getId());
            $sheet->setCellValue('F'.$position, $category->getName());
            $sheet->setCellValue('G'.$position, $category->getDescription());
        }

        $sheet->setCellValue('I1','Nom Utilisateur');
        $sheet->setCellValue('J1','Prenom Utilisateur');
        $sheet->setCellValue('K1','Ville Utilisateur');
        $sheet->setCellValue('L1','Adresse Utilisateur');
        $sheet->setCellValue('M1','Portemonnaie Utilisateur');
        $sheet->setCellValue('N1','Pays Utilisateur');
        foreach($repouserinfo as $key => $userinfo) {
            $position = $key+2;
            $sheet->setCellValue('I'.$position, $userinfo->getFirstname());
            $sheet->setCellValue('J'.$position, $userinfo->getLastname());
            $sheet->setCellValue('K'.$position, $userinfo->getCity());
            $sheet->setCellValue('L'.$position, $userinfo->getAdress());
            $sheet->setCellValue('M'.$position, $userinfo->getWallet());
            $sheet->setCellValue('N'.$position, $userinfo->getCountry());
        }


        $sheet->setTitle("My First Worksheet");

        $writer = new Xlsx($spreadsheet);

        $publicDirectory =$this->getParameter('kernel.project_dir') . '/public/stats';
        $excelFilepath =  $publicDirectory . '/stats'.$time->format('Y-m-dH:i:s').'.xlsx';
        $writer->save($excelFilepath);


        // $product = $this->get('serializer')->serialize($repo , 'json');
        // $response = new Response($product);
        // $response->headers->set('Content-Type', 'application/json');
        // return $response;
    }
}

