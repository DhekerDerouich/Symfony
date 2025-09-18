<?php

namespace App\Controller;

use PhpParser\Node\Expr\New_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'identifiant' => 5,
        ]);
    }
     #[Route(path: '/hello', name: 'app_hello')]
    public function hello(){
          return New Response('Hello 3A26');

    }
    #[Route(path: '/contact/{tel}', name: 'app_contact')]
    public function contact($tel){
            return $this->render('home/contact.html.twig',[
                'telephone' => $tel
            ]);     

    }
    #[Route(path: '/show', name: 'app_show')]
    public function show(){
        return new Response('Bonjour mes étudiants');
    }

    #[Route(path: '/afficher', name: 'app_afficher')]
    public function afficher(){
          return $this->render('home/apropos.html.twig');
           
    }
    

  
}
