<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    /**
     * @Route("/session", name="session")
     */
    public function creerVariableSession(SessionInterface $objSession)
    {
        //avant session_start
        // $_SESSION['nom'] = 'Lucy';

        $objSession->set('nom', 'Lucy');
        return $this->render('sessions/creer_variables_session.html.twig');
    }

    public function afficherVariableSession(SessionInterface $objSession)
    {
        //avant session_start
        // $_SESSION['nom'] = 'Lucy';

        $objSession->get('nom');
        return $this->render('sessions/afficher_variables_session.html.twig');
    }
}
