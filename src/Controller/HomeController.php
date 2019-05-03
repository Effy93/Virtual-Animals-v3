<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Monstre;
use App\Entity\Tarif;
use App\Entity\Article;

use App\Repository\ArticleRepository;

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
    public function displayHome(Request $request, PaginatorInterface $paginator)
    {
        $query = $this->getDoctrine()
            ->getRepository(Article::class)
            ->createQueryBuilder('articles')
 
            // ->from('Article', 'articles')
            ->addOrderBy('articles.id', 'DESC')
            ->getQuery();
            
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            4
        );
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();
        if (!$articles) {
            throw $this->createNotFoundException(
                'No articles found'
            );
        }
        return $this->render('home/home.html.twig', [
            'articles' => $articles,
            'pagination' => $pagination,
 
        ]);
    }

    // public function displayHome()
    // {
    //     $articleDepot = $this->getDoctrine()->getRepository(Article::class);
    //     $article = $articleDepot->findAll() ;
    //     return $this->render("home/home.html.twig", array('article' =>$article));
    // }


     /**
     * @Route("/conditions" , name="ml")
     */
    public function displayTermsConditions()
    {
        return $this->render("home/ml.html.twig");
    }
}
