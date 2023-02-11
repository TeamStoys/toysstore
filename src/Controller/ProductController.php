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
        $r ="ggg";
        $e = "gyghf";
        return $this->render('product/index.html.twig', [
            'controller_name' => $r.$e
        ]);
    }
}
