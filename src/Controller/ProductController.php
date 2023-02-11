<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
         * @Route("/sup/{id}", name="car_sup")
         */
        public function carSupAction( int $id): Response
        {
            return $this->render('product/index.html.twig', [
            'controller_name' => $id
        ]);
        }
}
