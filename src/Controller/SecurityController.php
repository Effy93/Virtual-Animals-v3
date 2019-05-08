<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /******************************************************************************** */
    /*                                    CONNEXION                                   */
    /******************************************************************************** */
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser(! null)) {
            return $this->redirectToRoute('home-private');
        }
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }


    /******************************************************************************** */
    /*                                    DECONNEXION                                 */
    /******************************************************************************** */
    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \Exception('Activer logout dans security.yaml');
    }

}
