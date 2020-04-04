<?php

namespace App\Controller;


use App\Entity\Etude;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EtudeController extends AbstractController
{
    /**
     * @Route("/etude", name="etudes")
     */
    public function index()
    {
        $repository=$this->getDoctrine()->getRepository(Etude::class);
        $etude= $repository->findAll();
        return $this->render('etude/index.html.twig', [
            "etudes"=>$etude,
        ]);
    }    

     /**
     * @Route("/etude/etude_has_plages", name="etude_has_plage")
     */
    public function PlageDeLetude($id)
    {
        $repository=$this->getDoctrine()->getRepository(Etude::class);
        $etude_has_plage= $repository->findAll($id);
        return $this->render('etude/etude_has_plage.html.twig', [
            "etudes"=>$etude,
        ]);
    }    
}
