<?php require('modele.php');
class Immeuble extends Modele{
   
    function getImmeuble($immId) { 
        $req = 'SELECT id_imm, numero, nb_etages, digicode, ascenseur FROM immeuble WHERE id = '.$immId;
        $appart = $this->executerRequete($req,array($immId));    
        return $appart; 
    }
        
    function getAppartementsByImm($immId) { 
        $req = 'SELECT id_app, numero, etage, surface, prix FROM Appartement a INNER JOIN Immeuble ON id = id_imm WHERE id = ?';
        $appart = $this->executerRequete($req,array($immId));    
        return $appart; 
    }

    public function ajouterImmeuble($num,$nbetg,$dcode,$asc) { 
        $sql = 'insert into Immeuble values(?, ?, ?, ?)'; 
        $this->executerRequete($sql, array($num,$nbetg,$dcode,$asc)); 
    }

}