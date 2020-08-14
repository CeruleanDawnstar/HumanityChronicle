<?php


namespace App\Controller;


use App\Entity\Invention;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class InventController
 * @package App\Controller
 * @Route("/invent")
 */
class InventController extends AbstractController
{
    /**
     * @Route("/{invent}", name="detailsInvention", requirements={"invent"="\d+"})
     * @param Invention $invent
     * @return Response
     */
    public function detailInvention(Invention $invent)
    {
        return $this->render('invent/detailsInvention.html.twig', ['invention' => $invent]);
    }

    /**
     * @Route("/list/{epoque}", name="list_invention", defaults={"epoque" = null})
     * @param string|null $epoque
     * @return Response
     */
    public function listInvention(string $epoque = null)
    {
        $options =[];
        if($epoque){
            $options = ['epoque' => $epoque];
        }
        $inventions = $this->getDoctrine()->getRepository(Invention::class)->findBy($options);
        return $this->render('invent/listInvention.html.twig', ['data'=>$inventions]);
    }
}