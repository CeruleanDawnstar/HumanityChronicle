<?php

namespace App\Controller;

use App\Entity\Personnalite;
use App\Form\PersonalityType;
use App\Repository\PersonnaliteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin-personality")
 */
class AdminPersonalityController extends AbstractController
{
    /**
     * @Route("/", name="personality_index", methods={"GET"})
     */
    public function index(PersonnaliteRepository $personalityRepository): Response
    {
        return $this->render('personality/index.html.twig', [
            'personalities' => $personalityRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="personality_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $personality = new Personnalite();
        $form = $this->createForm(PersonalityType::class, $personality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($personality);
            $entityManager->flush();

            return $this->redirectToRoute('personality_index');
        }

        return $this->render('personality/new.html.twig', [
            'personality' => $personality,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="personality_show", methods={"GET"})
     */
    public function show(Personnalite $personality): Response
    {
        return $this->render('personality/show.html.twig', [
            'personality' => $personality,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="personality_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Personnalite $personality): Response
    {
        $form = $this->createForm(PersonalityType::class, $personality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personality_index');
        }

        return $this->render('personality/edit.html.twig', [
            'personality' => $personality,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="personality_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Personnalite $personality): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personality->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($personality);
            $entityManager->flush();
        }

        return $this->redirectToRoute('personality_index');
    }
}
