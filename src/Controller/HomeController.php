<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Monstre;
use App\Entity\Tarif;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @Route("/home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/" , name="home")
     */
    public function displayHome()
    {
        return $this->render("home/home.html.twig");
    }

    /**
     * @Route("/conditions" , name="ml")
     */
    public function displayTermsConditions()
    {
        return $this->render("home/ml.html.twig");
    }
   

}
