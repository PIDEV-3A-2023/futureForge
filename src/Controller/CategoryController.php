<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Category;
use App\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategoryController extends AbstractController
{
    protected function json_response($data)
    {
        return new JsonResponse($data);
    }

    
     


    

    
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
    public function addcategory(Request $request , EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile= $form->get('photo')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$photoFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photoFile->move(
                        $this->getParameter('Category_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $category->setphoto($newFilename);
            }

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
    public function showCategory(Request $request)
    {
        $searchTerm = $request->query->get('search') ?? '';
        $categories = [];
        $app = $this->getDoctrine()->getRepository(App::class)->findOneBy([]);
        
        if (!empty($searchTerm)) {
            $categories = $this->getDoctrine()->getRepository(Category::class)
                ->createQueryBuilder('c')
                ->where('c.name LIKE :searchTerm')
                ->setParameter('searchTerm', '%'.$searchTerm.'%')
                ->getQuery()
                ->getResult();
        } else {
            $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        }
        
        return $this->render('category/Affichagecategory.html.twig', [
            'categories' => $categories,
            'app' => $app,
            'searchTerm' => $searchTerm,
        ]);
    }
    
     }
    
