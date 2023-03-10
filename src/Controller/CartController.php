<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\CartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class CartController extends AbstractController
{
    /**
    * @Route("/cart", name="app_cart")
    */
   public function showCart(CartRepository $repo): Response
   {
    $user = $this->getUser();
     $carts = $repo->cartshow($user->getId());
     $total= $repo->sumCart($user);
     return $this->render('cart.html.twig',[
        'carts'=>$carts,
        'total'=>$total[0]['Total']

     ]);
    //    return $this->render('cart.html.twig');
   }

   /**
    * @Route("/addcart/{id}", name="add_cart")
    */
   public function addCart(Product $p,Request $req, CartRepository $repo): Response
   {
        $qty = $req->query->get('quantity_input');

        $card = new Cart();
        $card->setQuantity($qty);
        $card->setProcart($p);
        $card->setUsercart($this->getUser());
        $repo->save($card, true);
       return $this->json('OK');
   }
}
