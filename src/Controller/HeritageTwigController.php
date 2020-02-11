<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HeritageTwigController extends AbstractController
{
    /**
     * @Route("/heritage/twig", name="heritage_twig")
     */
    public function index()
    {
        return $this->render('heritage_twig/index.html.twig', 
        
            // 'controller_name' => 'HeritageTwigController',
            // on n'a pas besoin de le garder
        );
    }

    // a chaque fois on cree une autre action 
    /**
     * @Route("heritage/twig/afficher", name="heritage_twig")
     */
    public function afficher(){
        return $this->render('heritage_twig/afficher_html.twig');
    }
}
