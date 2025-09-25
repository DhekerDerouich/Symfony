<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/show/{name}', name: 'app_show_author')]
    public function showAuthor($name){
        return $this->render('author/show.html.twig',[
            'name' => $name
        ]);
    }
    #[Route('/list', name: 'app_list_author')]
    public function listAuthors(){
        $authors=array(
            array('id'=>1,'picture' =>'/assets/images/esprit.png','username'=>'victor hugo','email'=>'victor.hugo@gmail.com','nb_books'=>100),
            array('id'=>2,'picture' =>'/assets/images/capture.png','username'=>'amar','email'=>'amar@gmail.com','nb_books'=>50),
            array('id'=>3,'picture' =>'/assets/images/created.png','username'=>'dali','email'=>'dali@gmail.com','nb_books'=>70),
        );
         return $this->render('author/list.html.twig',[
        'authors'=>$authors
    ]);
        
    }
}
