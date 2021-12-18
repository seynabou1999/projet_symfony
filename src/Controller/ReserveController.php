<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReserveController extends AbstractController
{
    #[Route('/reserve', name: 'reserve')]
    public function index(): Response
    {
        return $this->render('reserve/index.html.twig', [
            'controller_name' => 'ReserveController',
        ]);
    }
}
