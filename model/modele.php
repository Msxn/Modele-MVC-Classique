<?php
abstract class Modele {
/** Objet PDO d'accès à la BD */
    protected function executerRequete($sql, $params = null) { 
        if ($params == null) { 
                $resultat = $this->getBdd()->query($sql); // Exécution directe 
        }
        else 
        { 
            $resultat = $this->getBdd()->prepare($sql);  // Requête préparée 
            $resultat->execute($params); 
        } 
        return $resultat; 
    }

    private function getBdd() {
        // Création de la connexion
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=syndic;charset=utf8',
            'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
        }
        return $bdd;
    }
}

