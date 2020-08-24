<?php


namespace App\Controller;


use App\Entity\Anecdotes;
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
//        $events = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
        return $this->render('event/detailsEvent.html.twig', [ 'event' => $event ] );
    }


    /**
     * @Route("/list/{epoque}", name="list_event", defaults={"epoque" = null })
     * @param string|null $epoque
     * @return Response
     */
    public function listEvent(string $epoque = null)
    {
        $options = [];
        if($epoque){
            $options = ['epoque' => $epoque];
        }
        $events = $this->getDoctrine()->getRepository(Evenement::class)->findBy($options);
        return $this->render('event/listEvent.html.twig',['data' => $events]);
    }
}