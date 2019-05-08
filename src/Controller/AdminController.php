<?php

namespace App\Controller ;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\AddMonstreType;
use App\Form\ArticleType;

use App\Entity\User;
use App\Entity\Monstre;
use App\Entity\Article;

/**
 * @Route("/admin")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/" , name="home_admin")
     * @IsGranted("ROLE_DESIGNER")
     */
    public function displayHome()
    {
        return $this->render("admin/home_admin.html.twig");
    }

    /**
     * @Route("/monstre/edit" , name="edit_monster")
     * @IsGranted("ROLE_DESIGNER") 
     */
    public function editNewMonstre(Request $requete)
    {
        $monstre = new Monstre();
        $formMonster = $this->createForm(AddMonstreType::class, $monstre);
        // Recupère les données d'un POST
        $monsterDepot = $this->getDoctrine()->getRepository(Monstre::class);
        $formMonster->handleRequest($requete);
        // dd($formMonster);
        if ($formMonster->isSubmitted() ) {
           
            // dd($formMonster);
            $this->addFlash("success", "Cet article a bien été envoyé");

            // Sauvegarde les changements
            $gestionnaire = $this->getDoctrine()->getManager();
            $gestionnaire->persist();
            $gestionnaire->flush();
        }

        // dd($formMonster);
        return $this->render("admin/add_monster.html.twig", [ 'monsterForm' => $formMonster->createView() ]);
    
    }

    /**
     * @Route("/news/add" , name="add_news")
     * @IsGranted("ROLE_DESIGNER") 
     */
    public function addNews(Request $requete)
    {
        // Appel de l'entité article
        $article = new Article();
        // Definit le formulaire (type + entité)
        $newsForm = $this->createForm(ArticleType::class, $article);
        // Recupérer les données du post
        $newsForm->handleRequest($requete);
        // Verifie si données envoyées et valide
        if ($newsForm->isSubmitted() && $newsForm->isValid() ) 
        {
            // Sauvegarder dans la base de donnée
            $gestionnaire = $this->getDoctrine()->getManager();
            // Sauvegarde et met a jouer l'entité
            $gestionnaire->persist($article);
            $gestionnaire->flush();
            return $this->redirectToRoute("home_admin");
        } else{
            return $this->render("admin/add_article.html.twig", array('newsForm' => $newsForm->createView() ));
        } 
    }

    /**
     * @Route("/news/edit/{id}", name="edit_news", requirements={"id" : "\d+"})
     * @isGranted("ROLE_DESIGNER")
     */
    public function editNews(int $id, Request $requete)
    {
        // Va chercher dans le repo
        $depot = $this->getDoctrine()->getRepository(Article::class);
        // Va chercher l'article avec l'id tapez dans l'url
        $article = $depot->find($id);
        // Si pas d'article trouvé, ne construit pas le formulaire d'édition
        if($article === null) {
            throw $this->createNotFoundException('Article introuvable');
        }
        // Créer le formulaire
        $newsForm = $this->createForm(ArticleType::class, $article);
        // Verification sur le newsForm
        $newsForm->handleRequest($requete);
        if ($newsForm->isSubmitted() && $newsForm->isValid() )
        {
            // Appel la fonction du manager
            $gestionnaire = $this->getDoctrine()->getManager();
            // Enregistre les nouvelles données avec persist(select BDD) et flush(update BDD)
            $gestionnaire->persist($article);
            $gestionnaire->flush();
            // alert("Article modifié !");
            $this->addFlash("success", "Cet article a bien été modifié");
            return $this->redirectToRoute("home_admin");
        } else {
            return $this->render("admin/edit_news.html.twig", array('newsForm' => $newsForm->createView() ));
        }
    }


    /**
     * @Route("/news/delete/{id}", name="delete_news", requirements={"id" : "\d+"})
     * @isGranted("ROLE_USER")
     */
    public function removeArticle($id)
    {
        $gestionnaire = $this->getDoctrine()->getManager();
        $depot = $this->getDoctrine()->getRepository(Article::class)->find($id);
        
        $gestionnaire->remove($depot);
        $gestionnaire->flush();
        $this->addFlash("success", "Cet article a bien été supprimé");
        return $this->redirectToRoute('home_admin');
    }


}
