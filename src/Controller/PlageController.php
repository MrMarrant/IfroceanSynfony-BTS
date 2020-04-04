<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlageController extends AbstractController
{
    /**
     * @Route("/plage", name="plage")
     */
    public function index()
    {
        return $this->render('plage/index.html.twig', [
            'controller_name' => 'PlageController',
        ]);
    }
}
