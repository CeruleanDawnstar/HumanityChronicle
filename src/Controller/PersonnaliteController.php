<?php


namespace App\Controller;


use App\Entity\Personnalite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PersonnaliteController
 * @package App\Controller
 * @Route("/personnalite")
 */
class PersonnaliteController extends AbstractController
{
    /**
     * @Route("/list", name="personnalite")
     * @return Response
     */
    public function listPersonnalite()
    {
        $personnalite = $this->getDoctrine()->getRepository(Personnalite::class)->findAll();
        return $this->render('personnalite/personnalitelist.html.twig',['data'=>$personnalite]);
    }

    /**
     * @Route("/{personnalite}", name="detailsPersonnalite", requirements={"personnalite"="\d+"})
     * @param Personnalite $personnalite
     * @return Response
     */
    public function detailPersonnalite(Personnalite $personnalite)
    {
        return $this->render('personnalite/detailsPersonnalite.html.twig', ['personality' => $personnalite]);
    }
}