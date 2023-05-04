<?php

namespace App\Controller;


use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;


class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="app_reclamation")
     *
     **/
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

    /**
     * @Route("/", name="add_reclamation")
     *
     **/

    public function Add(Request $request, ManagerRegistry $doctrine ) : Response {
        $Reclamation =  new Reclamation() ;
        $form =  $this->createForm(ReclamationType::class,$Reclamation) ;
        $form->add('Ajouter' , SubmitType::class) ;
        $form->handleRequest($request) ;

        if($form->isSubmitted()&& $form->isValid()){
            $Reclamation = $form->getData();


            $em= $doctrine->getManager() ;
            $em->persist($Reclamation);
            $em->flush();
            return $this ->redirectToRoute('add_reclamation') ;


        }

        return $this->render('reclamation/reclamation.html.twig' , [
            'form' => $form->createView()
        ]) ;
    }

   
    #[Route('/', name: 'afficher_rec', methods: ['GET'])]
  
    public function AfficheReclamation (Request $request , ReclamationRepository $repo): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(reclamation::class) ;
        $reclamation=$repo->findAll() ;

        return $this->render('reclamation/reclamationshow.html.twig' , [
            'reclamation' => $reclamation ,
            'ajoutA' => $reclamation
        ]) ;
    }


 
     #[Route('/', name: 'upadate_rec', methods: ['GET'])]
     
    public function Delete($id,ReclamationRepository $repository , ManagerRegistry $doctrine) : Response {
        $Reclamation=$repository->find($id) ;
        $em=$doctrine->getManager() ;
        $em->remove($Reclamation);
        $em->flush();
        return $this->redirectToRoute("afficher_rec") ;

    }
    #[Route('/', name: 'delete_rec', methods: ['GET'])]
    function update(ReclamationRepository $repo,$id,Request $request , ManagerRegistry $doctrine){
        $Reclamation = $repo->find($id) ;
        $form=$this->createForm(ReclamationType::class,$Reclamation) ;
        $form->add('update' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){

            $Reclamation = $form->getData();
            $em=$doctrine->getManager() ;
            $em->flush();
            return $this ->redirectToRoute('afficher_rec') ;
        }
        return $this->render('reclamation/updaterec.html.twig' , [
            'form' => $form->createView()
        ]) ;

    }

    /**
     * @Route("/export.csv", name="exportcsv", options={"expose"=true}, methods={"GET","POST"})
     *
     **/
    public function exportcsv(ReclamationRepository $reclamationRepository){


        $Reclamation = $reclamationRepository->findAll();
        //search all the datas of type Object

        $datas= $this->getDoctrine()->getRepository(Reclamation::class)->findBy([],['id' => 'desc']);
        // normalization and encoding of $datas
        $encoders = [new CsvEncoder()];
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $csvContent = $serializer->serialize($datas, 'csv');

        $response = new Response($csvContent);
        $response->headers->set('Content-Encoding', 'UTF-8');
        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename=Reclamation.csv');
        return $response;
    }


    /**
 * @Route("/search", name="reclamation_search", methods={"GET"})
 */
/*
public function search(Request $request, ReclamationRepository $reclamationRepository): JsonResponse
{
    $term = $request->query->get('term');
    $reclamations = $reclamationRepository->createQueryBuilder('r')
        ->where('r.nom LIKE :term OR r.prenom LIKE :term OR r.email LIKE :term')
        ->setParameter('term', '%'.$term.'%')
        ->getQuery()
        ->getResult();
    $results = array_map(function($reclamation) {
        return [
            'id' => $reclamation->getId(),
            'nom' => $reclamation->getNom(),
            'prenom' => $reclamation->getPrenom(),
            'email' => $reclamation->getEmail(),
            'description' => $reclamation->getDescription()
        ];
    }, $reclamations);
    return new JsonResponse($results);
}*/


}
