 <?php

// namespace App\Controller;

// use App\Entity\User;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\String\Slugger\SluggerInterface; 

// class ProfileController extends AbstractController
// {
//     /**
//      * @Route("/profile", name="app_profile")
//      */
//     public function editAction(Request $req, User $u,
//    SluggerInterface $slugger): Response
//    {
       
//        $form = $this->createForm(ProductType::class, $u);   

//        $form->handleRequest($req);
//        if($form->isSubmitted() && $form->isValid()){

//            if($u->getCreated()===null){
//                $u->setCreated(new \DateTime());
//            }
//            $imgFile = $form->get('file')->getData();
//            if ($imgFile) {
//                $newFilename = $this->uploadImage($imgFile,$slugger);
//                $p->setImage($newFilename);
//            }
//            $this->repo->save($u,true);
//            return $this->redirectToRoute('product_show', [], Response::HTTP_SEE_OTHER);
//        }
//        return $this->render("product/form.html.twig",[
//            'form' => $form->createView()
//        ]);
//    }
// }
