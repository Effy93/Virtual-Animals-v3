<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Appel des entités
use App\Entity\User;
use App\Entity\Monstre;

// Utilisation du bundle pour les roles (connexion)
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route ("/private")
 */

class PrivateSpaceController extends AbstractController
{
    /**
     * @Route("/home" , name="home-private")
     * @IsGranted("ROLE_USER")
     */
    public function displayHome()
    {
        $userDepot = $this->getDoctrine()->getRepository(User::class);
        $userData = $userDepot->findAll() ;
     

        // $em = $this->getDoctrine()->getManager();
        // $locationRepo = $em->getRepository(User::class);
        // $nb = $locationRepo->getMonstreNb();
        // $nbArray[0] = $nb;
        // dd($nb[0]);
    
        
        return $this->render("private-space/home_private.html.twig");
    }

    /**
     * @Route("/bestiary", name="bestiary")
     * @IsGranted("ROLE_USER")
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