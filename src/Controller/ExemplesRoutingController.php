<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ExemplesRoutingController extends AbstractController{

    /**
     * @Route("/afficher/message/accueil")
     */
    public function afficherMessageAccueil(){
        return new Response("Bonjour");
    }

    /**
     * @Route("/aurevoir")
     */
    public function direAurevoir(){
        return new Response("aurevoir ".date("d.m.Y"));
    }

    /**
     * @Route("/afficher/bonjour/perso/{prenom}/{nom}")
     */
    public function afficheBonjourPerson(Request $req){
        return new Response("Bonjour " . $req->get('prenom') . " & " . $req->get('nom') );
    }


    /**
     * @Route("/affiche/tva/{prix}")
     */
    public function afficheTva(Request $req){
        return new Response( $req->get("prix")+$req->get("prix")*0.21 . "tvac");
    }

    /**
     * @Route("affiche/moyenne/{nb1}/{nb2}/{nb3}")
     */
    public function afficheMoyenne(Request $req){
        return new Response( ($req->get("nb1") + $req->get("nb2") + $req->get("nb3"))/3);
    }
}
