<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConteneurController extends AbstractController
{
    #[Route('/conteneur', name: 'conteneur')]
    public function index(): Response
    {
        return $this->render('conteneur/index.html.twig', [
            'controller_name' => 'ConteneurController',
        ]);
    }
}
