<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Monstre;
use App\Entity\Tarif;
use App\Entity\Article;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Knp\Component\Pager\PaginatorInterface;


/**
 * @Route("/home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/" , name="home")
     * 
     */
    public function displayHome()
    {
        $articleDepot = $this->getDoctrine()->getRepository(Article::class);
        $article = $articleDepot->findAll() ;
        return $this->render("home/home.html.twig", array('article' =>$article));
    }

    /**
     * @Route("/conditions" , name="ml")
     */
    public function displayTermsConditions()
    {
        return $this->render("home/ml.html.twig");
    }
   

}
