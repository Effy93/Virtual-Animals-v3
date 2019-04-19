<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route ("/home")
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
     * @Route("/shop", name="shop")
     */
    public function displayShop()
    {
        return $this->render("home/shop.html.twig");
    }

}
