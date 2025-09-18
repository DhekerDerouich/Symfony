<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
     #[Route('/showService/{name}', name: 'app_show_service')]
    public function showService($name){
         return $this->render('home/showService.html.twig',[
             'name' => $name
         ]);
        
    }
     #[Route('/index', name: 'app_service')]
    public function goToIndex(){
        return $this->redirectToRoute('app_home');
    }
}
