<?php require('modele.php');

class Appartement extends Modele {

    function getAppart($appartId) { //méthode qui sert à récupérer les données d'un appart
        $req = 'SELECT id_app, numero, etage, surface, prix FROM appartement WHERE id_app = '.$appartId; //requête SQL select qui va chercher les infos
        $appart = $this->executerRequete($req,array($appartId)); //éxecution de la requête
        return $appart; //la méthode retourne le résultat du select
    }
    
    function getNbAppartByImm($immId) { //méthode qui va récupérer le nb d'apparts dans un immeuble
        $req = 'SELECT id_app, count(*) FROM appartement WHERE id_imm = '.$immId.' GROUP BY id_imm'; //requête SQL qui compte le nb d'apparts présents dans l'immeuble choisi
        $liste = $this->executerRequete($req); //éxecution de la requête
        return $liste; //retour du résultat
    }
    
    public function ajouterAppart($numero,$etage,$surface,$prix, $id_imm) {//fonction qui ajoute les données d'un nouvel appart dans la bdd
        //var_dump($_GET);
        $sql = 'insert into appartement(numero, etage, surface, prix, id_imm) values(?, ?, ?, ?, ?)'; //requête qui ajoute toutes les infos du formulaire dans la bdd
        $this->executerRequete($sql, array($numero,$etage,$surface,$prix, $id_imm)); //éxecution de la requête
    }
}