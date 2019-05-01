<?php

namespace App\Controller ;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Monstre;
use App\Entity\Jeux;
use App\Entity\Tarif;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @Route("/shop")
 */
class ShopController extends AbstractController
{
    
    /**
     * @Route("/", name="shop")
     * @IsGranted("ROLE_USER")
     */
    public function displayShop()
    {
        $monstres = $this->getDoctrine()->getRepository(Monstre::class)->findAll();
        $jeux = $this->getDoctrine()->getRepository(Jeux::class)->findAll();
        
        return $this->render("shop/shop.html.twig",['monstres' => $monstres, 'jeux' => $jeux]);
    }

    /**
     * @Route("/buy/{id}", name="buy_monster", requirements={"id" : "\d+"})
     */
    public function buyMonster(int $id)
    {
        // Acceder aux données de l'entité user connecté actuellement
        $user = $this->getUser();
        // Va recupérer les données du monstre avec l'id donné
        $monstre = $this->getDoctrine()->getRepository(Monstre::class)->find($id);
        // Ajoute un monstre, en ManyToMany, l'ajout doit ce faire des 2 côtés
        $user->addMonstre($monstre);
        $monstre->addUser($user);

        // Acceder a la propriété argent de user
        $userArgent = $user->getArgent();
        // Acceder a la propriété tarif du monstre
        $monstreTarif = $monstre->getTarif();
        // Va chercher le prix réel en fonction de l'id tarif du monstre
        $prix = $this->getDoctrine()->getRepository(Tarif::class)->find($monstreTarif);
        // Acceder a la propriété prix de la table tarif en fonction de l'id tarif du monstre
        $prixMonstre = $prix->getPrix();
         
        if($userArgent >= $prixMonstre) {
            // dd($monstre);
            $this->addFlash("success", "Cet article a bien été acheté");

            $gestionnaire = $this->getDoctrine()->getManager();
            // Retire le prix du monstre 
            $user->setArgent($userArgent - $prixMonstre);
            // Sauvegarde les changements
            $gestionnaire->persist($user);
            $gestionnaire->persist($monstre);
            $gestionnaire->flush();
        } else {
            $this->addFlash("fail", "Pas assez de thunes boloss");
        }
        return $this->redirectToRoute("shop");
    }


    /**
     * @Route("/buy/game{id}", name="buy_game", requirements={"id" : "\d+"})
     * @IsGranted("ROLE_USER")
     */
    public function buyGame (int $id) 
    {
        $user = $this->getUser();
        $jeux = $this->getDoctrine()->getRepository(Jeux::class)->find($id);
        $user->addJeux($jeux);
        $jeux->addUser($user);

        $userArgent = $user->getArgent();
        $jeuxTarif = $jeux->getTarif();
      
        $prix = $this->getDoctrine()->getRepository(Tarif::class)->find($jeuxTarif);
        $prixJeux = $prix->getPrix();
         
        if($userArgent >= $prixJeux) {
            $this->addFlash("success", "Cet article a bien été acheté");
            $gestionnaire = $this->getDoctrine()->getManager();
            $user->setArgent($userArgent - $prixJeux);

            $gestionnaire->persist($user);
            $gestionnaire->persist($jeux);
            $gestionnaire->flush();
        } else {
            $this->addFlash("fail", "Pas assez de thunes boloss");
        }
        return $this->redirectToRoute("shop");
    }

}
