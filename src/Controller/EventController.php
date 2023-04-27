<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Event;
use App\Form\EventType;
use App\Entity\Category;
use App\Repository\AppointmentRepository;
use App\Repository\EventRepository;
use App\Form\RechercheeventType;



class EventController extends AbstractController
{
    /**
     * @Route("/event", name="display_event")
     */
    public function index(): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
     /**
     * @Route("/admin", name="display_admin")
     */
    public function indexAdmin(): Response
    {
        return $this->render('Admin/index.html.twig');
    
    }
    
 /**
 * @Route("/Ajouterevent", name="add_event")
 */
public function addevent(Request $request): Response
{ 
    $event = new Event();
    $form = $this->createForm(EventType::class, $event);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $category = $form->get('categorie')->getData();
        $event->setCategorie($category);
        $em->persist($event);
        $em->flush();

        return $this->redirectToRoute('display_event');
    }
    return $this->render('event/AjouterEvent.html.twig', [
        'e' => $form->createView(),
        'submit_button' => 'Ajouter',
    ]);
}
    
    /**
 * @Route("/afficher-events", name="display_event")
 */
public function afficherEvents(): Response
{
    $em = $this->getDoctrine()->getManager();
    $events = $this->getDoctrine()->getRepository(Event::class)->findAllJoinedToCategory();
    
    return $this->render('event/Affichageevent.html.twig', [
        'events' => $events,
    ]);
}
/**
     * @Route("/modifevent/{id}", name="modify_event")
     */
    public function modifierevent(Request $request, $id): Response
    {
        $event = new Event();
$Categorie = $event->getCategorie(); // Accède à la propriété "categorie" via la méthode "getCategorie"
$event->setCategorie($Categorie); // Modifie la propriété "categorie" via la méthode "setCategorie"
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
$form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('display_event');
        }
        return $this->render('event/updateevent.html.twig', ['form' => $form->createView(),'submit_button' => 'Modifier',]);
    }
     /**
     * @Route("/removeevent/{id}", name="supp_event")
     */
    public function supressionevent(event $event): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();

        return $this->redirectToRoute('display_event');
    }
   
  
/**
     * @Route("/search", name="event_search")
     * */
        
            public function search(Request $request,EventRepository $repo): Response
            {
                
                $form = $this->createForm(RechercheeventType::class);
                        $form->handleRequest($request);
                    
                        if ($form->isSubmitted() && $form->isValid()) {
                            $data = $form->getData();
                            $criteria = [
                                'nom' => $data['nom'],
                                'categorie' => $data['categorie'],
                                'type' => $data['type']
                            ];
                    
                            $events = $repo->findBySearchCriteria($criteria);
                            return $this->render('event/search.html.twig', [
                                'event' => $events,
                                'form' => $form->createView(),
                            ]);
                    
                            
                        }
                        
                return $this->render('event/search.html.twig', [
                    'event' => [],
                    'form' => $form->createView(),
                ]);
            }
            /**
     * @Route("/stat", name="stat")
      * */
            public function stat(eventRepository $eventRepository): Response
            {
                $eventByMonth = $eventRepository->counteventByMonth();
                $eventByCategorie = $eventRepository->counteventByCategorie();
                
            
                return $this->render('event/statistique.html.twig', [
                    'eventByMonth' => $eventByMonth,
                    'eventByCategorie' =>$eventByCategorie,
                    
                    
                ]);
            }
}