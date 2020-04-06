<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\RegistrationType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request)
    {
        $personne = new Personne();

        $form= $this->createForm(RegistrationType::class, $personne);
        
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid() )
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($personne);

                $em->flush();

                return $this->redirectToRoute("etudes");
            }  

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/connexion", name="security_connexion")
     */
    public function connexion(Request $request)
    {
        return $this->render('security/connexion.html.twig');
    }
}
