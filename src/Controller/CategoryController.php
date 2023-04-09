<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Category;
use App\Form\CategoryType;

class CategoryController extends AbstractController
{
    
     /**
     * @Route("/admin", name="display_admin")
     */
    public function indexAdmin(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Category::class)->findAll();
        return $this->render('Admin/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    /**
     * @Route("/Ajoutercategory", name="add_category")
     */
    public function addcategory(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('display_category');
        }
        return $this->render('category/Ajoutercategory.html.twig', ['c' => $form->createView()]);
    }
  /**
 * @Route("/afficher_categories", name="display_category")
 */
public function afficher_categories(): Response
{
    $em = $this->getDoctrine()->getManager();
    $categories = $em->getRepository(Category::class)->findAll();
    
    return $this->render('category/Affichagecategory.html.twig', [
        'categories' => $categories,
    ]);
}


 /**
 * @Route("/modifcategory/{id}", name="modify_category")
 */
public function modifiercategory(Request $request, $id): Response
{
    $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
    $form = $this->createForm(CategoryType::class, $category);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('display_category');
    }

    return $this->render('category/updatecategory.html.twig', [
        'form' => $form->createView(),
        'category' => $category
    ]);
}
     /**
     * @Route("/removecategory/{id}", name="supp_category")
     */
    public function supressioncategory(category $category): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        return $this->redirectToRoute('display_category');
    }
}