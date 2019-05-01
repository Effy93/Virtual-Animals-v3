<?php

namespace App\Controller ;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\AddMonstreType;

use App\Entity\User;
use App\Entity\Monstre;

/**
 * @Route("/admin")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/" , name="home_admin")
     * @IsGranted("ROLE_ADMIN")
     */
    public function displayHome()
    {
        return $this->render("admin/home_admin.html.twig");
    }

    /**
     * @Route("/edit" , name="edit_monster")
     * @IsGranted("ROLE_DESIGNER") 
     */
    public function editNewMonstre(Request $requete)
    {
        $monstre = new Monstre();
        $formMonster = $this->createForm(AddMonstreType::class);
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

    // public function addArticle(Request $requete)
    // {
    //     // Création de l'article(objet) avec des attributs
    //     $article = new Article();
    //     $formulaire = $this->createForm(ArticleType::class, $article);
    //     // Verification du formulaire
    //     $formulaire->handleRequest($requete);
    //     if ($formulaire->isSubmitted() && $formulaire->isValid() ) 
    //     {
    //         // Sauvegarder dans la base de donnée
    //         $gestionnaire = $this->getDoctrine()->getManager();
    //         $gestionnaire->persist($article);
    //         $gestionnaire->flush();
    //         return $this->redirectToRoute('blog_article', array('id'=>$id));
    //     } else{
    //         return $this->render("blog/add_article.html.twig", array('formulaire' => $formulaire->createView() ));
    //     } 
    // }
   

}
