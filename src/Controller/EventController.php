<?php


namespace App\Controller;


use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class EventController
 * @package App\Controller
 * @Route("/event")
 */
class EventController extends AbstractController
{
    /**
     * @Route("/{event}", name="detailsEvent", requirements={"event"="\d+"})
     * @param Evenement $event
     * @return Response
     */
    public function detailEvent(Evenement $event)
    {
        return $this->render('event/detailsEvent.html.twig', [ 'event' => $event ] );
    }

    /**
     * @Route("/list", name="listEvent")
     * @return Response
     */
    public function listEvent()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM evenement';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('event/listEvent.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/prehistoire", name="listEventPrehistoire")
     * @return Response
     */
    public function filtreEventPrehistoire()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM evenement WHERE epoque = \'préhistoire\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('event/listEvent.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/antiquite", name="listEventAntiquite")
     * @return Response
     */
    public function filtreEventAntiquite()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM evenement WHERE epoque = \'antiquité\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('event/listEvent.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/moyenage", name="listEventMoyenAge")
     * @return Response
     */
    public function filtreEventMoyenAge()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM evenement WHERE epoque = \'moyen age\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('event/listEvent.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/moderne", name="listEventModerne")
     * @return Response
     */
    public function filtreEventModerne()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM evenement WHERE epoque = \'moderne\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('event/listEvent.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/contemporaine", name="listEventContemporaine")
     * @return Response
     */
    public function filtreEventContemporaine()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM evenement WHERE epoque = \'contemporaine\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('event/listEvent.html.twig',['data'=>$stmt->fetchAll()]);
    }
}