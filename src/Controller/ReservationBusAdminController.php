<?php

namespace App\Controller;

use App\Entity\ReservationBus;
use App\Form\ReservationBusType;
use App\Repository\ReservationBusRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/reservation/bus')]
class ReservationBusAdminController extends AbstractController
{
    #[Route('/search', name: 'reservation_bus_search')]
    public function search(Request $request, ReservationBusRepository $reservation_busRepository): Response
    {
        $query = $request->query->get('q');
        $reservation_bus = $reservation_busRepository->findByNom($query);

        return $this->render('reservation_busAdmin/search.html.twig', [
            'reservation_buses' => $reservation_bus,
            'query' => $query,
        ]);
    }

    #[Route('/', name: 'admin_reservation_bus_index', methods: ['GET'])]
    public function index(Request $request, ReservationBusRepository $reservation_busRepository, EntityManagerInterface $entityManager): Response
    {
        $reservationBuses = $entityManager
            ->getRepository(ReservationBus::class)
            ->findAll();
        $query = $request->query->get('q');
        $reservationBuses = $reservation_busRepository->findByNom($query);

        return $this->render('reservation_busAdmin/index.html.twig', [
            'reservation_buses' => $reservationBuses,
            'query' => $query,
        ]);
    }

    #[Route('/new', name: 'admin_reservation_bus_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationBu = new ReservationBus();
        $form = $this->createForm(ReservationBusType::class, $reservationBu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationBu);
            $entityManager->flush();

            return $this->redirectToRoute('admin_reservation_bus_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_busAdmin/new.html.twig', [
            'reservation_bu' => $reservationBu,
            'form' => $form,
        ]);
    }

    #[Route('/{idReservationBus}', name: 'admin_reservation_bus_show', methods: ['GET'])]
    public function show(ReservationBus $reservationBu): Response
    {
        return $this->render('reservation_busAdmin/show.html.twig', [
            'reservation_bu' => $reservationBu,
        ]);
    }

    #[Route('/{idReservationBus}/edit', name: 'admin_reservation_bus_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationBus $reservationBu, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationBusType::class, $reservationBu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_reservation_bus_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_busAdmin/edit.html.twig', [
            'reservation_bu' => $reservationBu,
            'form' => $form,
        ]);
    }

    #[Route('/{idReservationBus}', name: 'admin_reservation_bus_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationBus $reservationBu, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationBu->getIdReservationBus(), $request->request->get('_token'))) {
            $entityManager->remove($reservationBu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_reservation_bus_index', [], Response::HTTP_SEE_OTHER);
    }
}
