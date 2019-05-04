<?php

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\PPCType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class GamesController extends AbstractController
{
    /**
     * @Route("/games", name="games")
     */
    public function homeGames()
    {
        return $this->render('private-space/games/layout.html.twig');
    }

    /**
     * @Route("/games/home/ttt", name="home_ttt")
     */
    public function displayHomeTTT()  
    {
        return $this->render('private-space/games/ttt/home_ttt.html.twig');
    }

    /**
     * @Route("/games/ttt", name="ttt")
     */
    public function displayTTT()  
    {
        return $this->render('private-space/games/ttt/ttt.html.twig');
    }

    /**
     * @Route("/games/ttt/win", options={"expose"=true}, name="win-ttt")
     * 
     */
    public function ajaxActionTTT(Request $request)
    {
        // if(isset($win))
        // {
           
            $gain = $request->request->get('request');
            $gain = json_decode($request->getContent());
            // dd($_POST['gain']);
            // dd($gain);
            if($request->isXmlHttpRequest()){
                $gain = $request->request->all(); // tableau des champs POST
             

                /* GAIN AJOUTER A LA BDD  */
                if ($gain >= 12) {
                // Va chercher l'argent actuel de l'utilisateur
                $user = $this->getUser();
                $userArgent = $user->getArgent();
                $user->setArgent($userArgent +5);
                // Ajoute et enregistre dans la bdd le gain
                $gestionnaire = $this->getDoctrine()->getManager();
                $gestionnaire->persist($user);
                $gestionnaire->flush();
            }
              // exit;
     
                return new \Symfony\Component\HttpFoundation\JsonResponse($gain);
            }
            exit;
            return $this->redirectToRoute('win-ttt', [
                'gain' => $gain]);
        // }
    }

    /**
     * @Route("/games/home/bb", name="home_bb")
     */
    public function displayHomeBB()
    {
        return $this->render('private-space/games/bb/home_bb.html.twig');
    }

    /**
     * @Route("/games/bb", options={"expose"=true}, name="bb")
     */
    public function displayBB()
    {
        return $this->render('private-space/games/bb/bb.html.twig');
    }

    /**
     * @Route("/games/bb/win", options={"expose"=true}, name="win-bb")
     */
    public function ajaxActionBB(Request $request)
    {
        // if(isset($win))
        // {
            $this->addFlash("win", "gg");
            $request = $this->container->get('request');
            $data = json_decode($request->getContent());
            dd($win);
        // }
    }

    /**
     * @Route("/games/home/ppc", name="home_ppc")
     */
    public function displayHomePPC()
    {
        return $this->render('private-space/games/ppc/home_ppc.html.twig');
    }

     /**
     * @Route("/games/ppc", name="ppc")
     */
    public function createPPC(Request $requete) 
    {
        
        $formPPC = $this->createForm(PPCType::class);
        // Recupère les données d'un POST
        $formPPC->handleRequest($requete);
        
        if ($formPPC->isSubmitted() && $formPPC->isValid() ) 
        {
            // dd($_POST);
            // $this->addFlash("success", "soumission");
        
            // Recupere la valeur choisi par l'utilisateur
            $choix = $_POST['ppc'];
            $choix_user = $choix['choix'];
            $choix_ia = mt_rand(1, 3);
            $gain = 0;
            // dd($choix['choix']);

            /* TEST USER  */
            if($choix_user == $choix_ia) {
                $gain = 0;
                $this->addFlash("msgInfos", "Egalité");
                // $msgInfoGain = '<script> alert("EGALITÉ") </script>';
                // $msgInfoGain .= 'EGALITÉ dommage ! Retentez votre chance </br>';
                // dd($gain);
            }
            if($choix_user == 1 && $choix_ia === 2) {
                $gain = 0;
                $this->addFlash("msgInfos", "Perdu");
                // $msgInfoGain = '<script> alert("PERDU") </script>';
                // $msgInfoGain .= 'PERDU dommage ! Retentez votre chance </br>';
                // dd($gain);
            }
            if($choix_user == 2 && $choix_ia === 1) {
                $gain = 1;
                $this->addFlash("msgInfos", "Gagné");
                // $msgInfoGain = '<script> alert("GAGNÉ") </script>';
                // $msgInfoGain .= 'FÉLICITATION ! Vous gagnez ' . $gain . ' ruby </br>';
                // dd($gain);
            }
            if($choix_user == 1 && $choix_ia === 3) {          
                $gain = 1;
                $this->addFlash("msgInfos", "Gagné");
                // $msgInfoGain = '<script> alert("GAGNÉ") </script>';
                // $msgInfoGain .= 'FÉLICITATION ! Vous gagnez ' . $gain . ' ruby </br>';
                // dd($gain);
            }
            if($choix_user == 3 && $choix_ia === 1) {
                $gain = 0;
                $this->addFlash("msgInfos", "Perdu");
                // $msgInfoGain = '<script> alert("PERDU") </script>';
                // $msgInfoGain .= 'PERDU dommage ! Retentez votre chance </br>';
                // dd($gain);
            }
            if($choix_user == 2 && $choix_ia === 3) {
                $gain = 0;
                $this->addFlash("msgInfos", "Perdu");
                // $msgInfoGain = '<script> alert("PERDU") </script>';
                // $msgInfoGain .= 'PERDU dommage ! Retentez votre chance </br>';
                // dd($gain);
            }
            if($choix_user == 3 && $choix_ia === 2) {
                $gain = 1;
                $this->addFlash("msgInfos", "Gagné");
                // $msgInfoGain = '<script> alert("GAGNÉ") </script>';
                // $msgInfoGain .= 'FÉLICITATION ! Vous gagnez ' . $gain . ' ruby </br>';
                // dd($gain);
            } 

            /* GAIN AJOUTER A LA BDD  */
            if ($gain >= 1) {
                // Va chercher l'argent actuel de l'utilisateur
                $user = $this->getUser();
                $userArgent = $user->getArgent();
                $user->setArgent($userArgent +1);
                // Ajoute et enregistre dans la bdd le gain
                $gestionnaire = $this->getDoctrine()->getManager();
                $gestionnaire->persist($user);
                $gestionnaire->flush();
            }



            /* TRAITEMENT DES CHOIX */
            // if($choix_user == 1) {
            //     $msgInfoUser = 'Vous avez choisi Pierre';
            // }
            // if($choix_user == 2){
            //     $msgInfoUser = 'Vous avez choisi Papier';
            // }
            // if($choix_user == 3){
            //     $msgInfoUser = 'Vous avez choisi Ciseaux';
            // }
            // if($choix_ia == 1){
            //     $msgInfoIa = 'Votre adversaire à choisi Pierre';
            // }
            // if($choix_ia == 2){
            //     $msgInfoIa = 'Votre adversaire à choisi Papier';
            // }
            // if($choix_ia == 3){
            //     $msgInfoIa = 'Votre adversaire à choisi Ciseaux';
            // }
            // // dd($choix_ia);
            
            // /* AFFICHAGE DES CHOIX */
            // if(isset($msgInfoGain) or isset($msgInfoIa) or isset($msgInfoUser)) {
            //     echo '<div class="msg-infos-container">';
            // }
            // if(isset($msgInfoUser) && isset($msgInfoIa)) {
            //     echo '<div class="msgInfo">
            //     <marquee direction="left">
            //     <p style=color:blue;>'. $msgInfoUser . ' <span style=color:green;>'. $msgInfoIa . '</span> </p>
            //     </marquee>
            //     </div>';
            // }
            // if(isset($msgInfoGain)) {
            //     echo '<div class="msg-infos-container">
            //     <div class="msgInfo">
            //     <p style=color:red; >' . $msgInfoGain . '</div>
            //     </div>
            //     </div>';
            // } 
            return $this->redirectToRoute('msg-infos'); 
        } else {
            return $this->render('private-space/games/ppc/ppc.html.twig', [ 'PPCform' => $formPPC->createView() ] );
        }

    }

    /**
     * @Route("/games/ppc/infos", name="msg-infos")
     */
    public function msgInfosPPC()  
    {
        return $this->render('private-space/games/ppc/msg_infos.html.twig');
    }

   

}