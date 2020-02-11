<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmbedControllerVueController extends AbstractController
{

    /**
     * @Route("embed/controller/vue/affiche/vue1")
     */
    public function afficheVue1(){
        return $this -> render ("embed_controller_vue/affiche_vue1.html.twig");

    }

    // pour le parametre il ne peut pas chercher la varaible directement 
    //il accede par la cle, c'est pour cela tab 
    public function donneesDynamique($nombreVilles){
        $villes =['Madrid', 'Paris', 'Rome', 'Amsterdam'];
        $villes = array_slice($villes, 0, $nombreVilles);

        return $this ->render("embed_controller_vue/donnees_dynamiques.html.twig", 
           ["villes" => $villes]);
    }

    /**
     * @Route("embed/controller/vue/affiche/vue2")
     */
    public function afficheVue2(){
        return $this -> render ("embed_controller_vue/affiche_vue2.html.twig");

    }


}
