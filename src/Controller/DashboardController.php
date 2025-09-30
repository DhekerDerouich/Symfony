<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/back', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/pages/{page}', name: 'app_pages', requirements: ['page' => 'dashboard|tables'])]
    public function pages(string $page): Response
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/pages/' . $page . '.html';

        if (file_exists($filePath)) {
            $content = file_get_contents($filePath);
            return new Response($content);
        }

        throw $this->createNotFoundException('La page demandée n\'existe pas.');
    }
}