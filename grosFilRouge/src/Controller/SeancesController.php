<?php

namespace App\Controller;

use App\Entity\Seances;
use App\Form\SeancesType;
use App\Repository\SeancesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/seances')]
#[IsGranted('ROLE_USER')]
class SeancesController extends AbstractController
{
    #[Route('/', name: 'app_seances_index', methods: ['GET'])]
    public function index(SeancesRepository $seancesRepository): Response
    {
        return $this->render('seances/index.html.twig', [
            'seances' => $seancesRepository->findAll(),
        ]);
    }

    #[Route('/list/{id}', name: 'app_seances_list', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function listSeances(SeancesRepository $seancesRepository, int $id): Response
    {
        //On veut les séances du cours dont l'id est dans l'url
        $seances = $seancesRepository->findBy(['cours_id' => $id]);

        return $this->render('seances/index.html.twig', [
            'seances' => $seances,
        ]);
    }

    #[Route('/new', name: 'app_seances_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, SeancesRepository $seancesRepository): Response
    {
        $seance = new Seances();
        $form = $this->createForm(SeancesType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $seancesRepository->save($seance, true);

            return $this->redirectToRoute('app_seances_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('seances/new.html.twig', [
            'seance' => $seance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_seances_show', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function show(Seances $seance): Response
    {
        return $this->render('seances/show.html.twig', [
            'seance' => $seance,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_seances_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, Seances $seance, SeancesRepository $seancesRepository): Response
    {
        $form = $this->createForm(SeancesType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $seancesRepository->save($seance, true);

            return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('seances/edit.html.twig', [
            'seance' => $seance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_seances_delete', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(Request $request, Seances $seance, SeancesRepository $seancesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$seance->getId(), $request->request->get('_token'))) {
            $seancesRepository->remove($seance, true);
        }

        return $this->redirectToRoute('app_seances_index', [], Response::HTTP_SEE_OTHER);
    }
}
