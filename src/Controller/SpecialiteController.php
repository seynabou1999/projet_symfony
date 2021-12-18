<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecialiteController extends AbstractController
{
    #[Route('/specialite', name: 'specialite')]
    public function index(): Response
    {
        return $this->render('specialite/index.html.twig', [
            'controller_name' => 'SpecialiteController',
        ]);
    }
}
