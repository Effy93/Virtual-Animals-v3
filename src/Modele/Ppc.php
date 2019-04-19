<?php

namespace App\Modele ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route ("/home")
 */
class Ppc extends AbstractController
{
    // /**
    //  * @Route("/games/ppc", name="ppc")
    //  */
    public function createPPC() 
    {
        if(isset($_POST['choix'])) { 
            $choix_user = $_POST['choix'];
            $choix_ia = mt_rand(1, 3);

            /* TEST USER  */
            if($choix_user == $choix_ia) {
                $_SESSION['gain'] = 0;
                $msgInfoGain = '<script> alert("EGALITÉ") </script>';
                $msgInfoGain .= 'EGALITÉ dommage ! Retentez votre chance </br>';
            }
            if($choix_user == 1 && $choix_ia === 2) {
                $_SESSION['gain'] = 0;
                $msgInfoGain = '<script> alert("PERDU") </script>';
                $msgInfoGain .= 'PERDU dommage ! Retentez votre chance </br>';
            }
            if($choix_user == 2 && $choix_ia === 1) {
                $_SESSION['gain'] = 1;
                $msgInfoGain = '<script> alert("GAGNÉ") </script>';
                $msgInfoGain .= 'FÉLICITATION ! Vous gagnez ' . $_SESSION['gain'] . ' ruby </br>';
            }
            if($choix_user == 1 && $choix_ia === 3) {          
                $_SESSION['gain'] = 1;
                $msgInfoGain = '<script> alert("GAGNÉ") </script>';
                $msgInfoGain .= 'FÉLICITATION ! Vous gagnez ' . $_SESSION['gain'] . ' ruby </br>';
            }
            if($choix_user == 3 && $choix_ia === 1) {
                $_SESSION['gain'] = 0;
                $msgInfoGain = '<script> alert("PERDU") </script>';
                $msgInfoGain .= 'PERDU dommage ! Retentez votre chance </br>';
            }
            if($choix_user == 2 && $choix_ia === 3) {
                $_SESSION['gain'] = 0;
                $msgInfoGain = '<script> alert("PERDU") </script>';
                $msgInfoGain .= 'PERDU dommage ! Retentez votre chance </br>';
            }
            if($choix_user == 3 && $choix_ia === 2) {
                $_SESSION['gain'] = 1;
                $msgInfoGain = '<script> alert("GAGNÉ") </script>';
                $msgInfoGain .= 'FÉLICITATION ! Vous gagnez ' . $_SESSION['gain'] . ' ruby </br>';
            } 
            /* si gain alors ajoute +1 BDD */
            if ($_SESSION['gain'] > 0) {
                $_SESSION['argent'] += 1;
                DataBase::getInstance()->insertRuby($_SESSION['gain']);
                // $bdd = new PDO ('mysql:host=localhost;dbname=animalerie', 'root', 'root');
                // $getId = $_SESSION['id'];
                // $insertRuby = $bdd-> prepare("UPDATE `user` SET `argent` = argent + 1 WHERE `user`.`id` = $getId");
                // $insertRuby -> execute(array($_SESSION['gain']));
                $msgInfoGain = '<script> alert("Bravo vous avez gagné ' . $_SESSION['gain'] . ' ruby") </script>' ;
            }

            /* TRAITEMENT DES CHOIX */
            if($choix_user == 1) {
                $msgInfoUser = 'Vous avez choisi Pierre';
            }
            if($choix_user == 2){
                $msgInfoUser = 'Vous avez choisi Papier';
            }
            if($choix_user == 3){
                $msgInfoUser = 'Vous avez choisi Ciseaux';
            }
            if($choix_ia == 1){
                $msgInfoIa = 'Votre adversaire à choisi Pierre';
            }
            if($choix_ia == 2){
                $msgInfoIa = 'Votre adversaire à choisi Papier';
            }
            if($choix_ia == 3){
                $msgInfoIa = 'Votre adversaire à choisi Ciseaux';
            }
            
            /* AFFICHAGE DES CHOIX */
            // if(isset($msgInfoGain) or isset($msgInfoIa) or isset($msgInfoUser)) {
            //     $this->addBloc('<div class="msg-infos-container"> ');
            // }
            if(isset($msgInfoUser) && isset($msgInfoIa)) {
                echo '<div class="msgInfo">
                <marquee direction="left">
                <p style=color:blue;>'. $msgInfoUser . ' <span style=color:green;>'. $msgInfoIa . '</span> </p>
                </marquee>
                </div>';
            }
            if(isset($msgInfoGain)) {
                echo '<div class="msg-infos-container">
                <div class="msgInfo">
                <p style=color:red; >' . $msgInfoGain . '</div>
                </div>
                </div>';
            }
        }
    }

}





