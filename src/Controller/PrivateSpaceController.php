<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Appel des entités
use App\Entity\User;
use App\Entity\Monstre;

// Utilisation du bundle pour les roles (connexion)
use Sensio\Bundle\FrameworkExtraBundle\Configuration\isGranted;

/**
 * @Route ("/private")
 */

class PrivateSpaceController extends AbstractController
{
    /**
     * @Route("/home" , name="home-private")
     * @isGranted("ROLE_USER")
     */
    public function displayHome()
    {
        $userDepot = $this->getDoctrine()->getRepository(User::class);
        $userData = $userDepot->findAll() ;
        
        return $this->render("private-space/home_private.html.twig");
    }

    /**
     * @Route("/bestiary", name="bestiary")
     */
    public function displayBestiary()
    {
        return $this->render("private-space/bestiary.html.twig");
    }

    /**
     * @Route("/inventory", name="inventory")
     */
    public function displayInventory()
    {
        return $this->render("private-space/inventory.html.twig");
    }

}