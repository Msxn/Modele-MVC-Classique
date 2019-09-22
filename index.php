<?php
    require('view/header.html');
    require('controller/AppartementController.php');
    try {
        $suivi = new AppartementController();
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'listerAppart') { //si l'url contient ?action=listerAppart
                if (isset($_GET['id'])) {
                    $idAppart = intval($_GET['id']);
                    if ($idAppart != 0)
                        $suivi->listerAppart($idAppart); //executer méthode listerAppart
                    else
                        throw new Exception("Identifiant appart non valide");
                }
            }
            else if ($_GET['action'] == 'afficherNbAppartByImm') { //si l'url contient ?action=afficherNbAppartByImm
                if (isset($_GET['id'])) {
                    $idImm = intval($_GET['id']);
                    if ($idImm != 0)
                        $suivi->afficherNbAppartByImm($idImm); //executer méthode afficherAppartByImm
                    else
                        throw new Exception("Identifiant immeuble non valide");
                }
            }
            else if (isset($_GET['action']) && $_GET['action'] == 'addAppart') { //si l'url contient ?action=addAppart
                $numero = intval($_GET['numero']); //stockage de toutes les données contenues dans l'url grâce à la méthode GET
                $etage = intval($_GET['etage']);
                $surface = intval($_GET['surface']);
                $prix = intval($_GET['prix']);
                $id_imm = intval($_GET['id_imm']);
                if (!empty($numero) && !empty($etage) && !empty($surface) && !empty($prix) && !empty($id_imm)) //si aucun champ n'est vide
                    $suivi->addAppart($numero, $etage, $surface, $prix, $id_imm); //executer méthode addAppart
                else
                    throw new Exception("Informations non valides");
            }
        }
        else{
            require('view/accueil.php'); //s'il n'y a rien dans $_GET['action']
        }
    }
    catch (Exception $e) {
        echo 'Exception reçue : ', $e->getMessage(), "\n";
    }