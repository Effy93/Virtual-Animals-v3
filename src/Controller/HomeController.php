<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Monstre;
use App\Entity\Tarif;

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
     * @Route("/shop", name="shop")
     */
    public function displayShop()
    {
        $monstres = $this->getDoctrine()->getRepository(Monstre::class)->findAll();
        return $this->render("home/shop.html.twig", ['monstres' => $monstres]);
    }

    /**
     * @Route("/shop/buy/{id}", name="buy_monster", requirements={"id" : "\d+"})
     */
    public function buyMonster(int $id)
    {
        // Contient les données de l'entité user connecté actuellement
        $user = $this->getUser();
        // Va recupérer les données du monstre avec l'id donné
        $monstre = $this->getDoctrine()->getRepository(Monstre::class)->find($id);
        // Ajoute un monstre, en ManyToMany, l'ajout doit ce faire des 2 côtés
        $user->addMonstre($monstre);
        $monstre->addUser($user);

        // dd($monstre_tarif);
         

        if($user.argent >= $monstre.tarif) {
            // dd($monstre);
            $this->addFlash("success", "Cet article a bien été acheter");

            $gestionnaire = $this->getDoctrine()->getManager();
            $gestionnaire->persist($user);
            $gestionnaire->persist($monstre);
            $gestionnaire->flush();

            $user->setArgent();
        } else {
            $this->addFlash("success", "Pas assez de thunes boloss");
        }
      
       
       
        

        return $this->redirectToRoute("shop");
    }

}
