<?php
require 'model/appartement.php';
class AppartementController
{
    public function listerAppart($idAppart) //fonction qui liste les données d'un appart en fonction de l'id_app
    {
        $appart = new Appartement();
        $result = $appart->getAppart($idAppart); //execute la méthode contenue dans la classe Appartement
        var_dump($result);
        require('view/appart.php'); //afficher la vue correspondante
    }
    
    // Appartements d'un immeuble
    public function afficherNbAppartByImm($immId) //fonction qui affiche le nb d'apparts en fonction de l'id_imm
    {
        $appart = new Appartement(); 
        $result = $appart->getNbAppartByImm($immId);
        require('view/appartByImm.php');
    }
    
    public function addAppart($numero,$etage,$surface,$prix, $id_imm) //fonction qui ajoute un appart dans la bdd
    {
        $appart = new Appartement();
        $insert = $appart->ajouterAppart($numero,$etage,$surface,$prix, $id_imm);
        require('view/accueil.php');
    }
    
    // Affiche une erreur
    public function signalerErreur($msgErreur)
    {
        require 'vueErreur.php';
    }
}