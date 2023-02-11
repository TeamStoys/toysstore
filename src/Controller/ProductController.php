<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{id}', name: 'app_product')]
    public function index(int $id): Response
    {
        $r ="ggg";
        $e = "gyghf";
        return $this->render('product/index.html.twig', [
            'controller_name' => $r.$id
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
