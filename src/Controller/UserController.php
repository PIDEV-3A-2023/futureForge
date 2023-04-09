<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function index(): Response
    {
        return $this->render('use/home.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
 * @Route("/afficher_categorie", name="display_categorie")
 */
public function affichercategorie(): Response
{
    $em = $this->getDoctrine()->getManager();
    $categories = $em->getRepository(Category::class)->findAll();
    
    return $this->render('category/categoryFront.html.twig', [
        'categories' => $categories,
    ]);
}
    
}
