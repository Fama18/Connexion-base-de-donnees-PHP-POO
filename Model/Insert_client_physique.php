<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'principal.php';
require_once 'Config.php';
require_once 'Class_Client_Physique.php';

class principal_physique extends Principal{


 public function Ajout_client_Physique(Client_Physique $client_physique){
        $req = self::Insert("INSERT INTO client_physique(numCni, nom, prenom, civilite, DateDeNaissance, adresse, email, telephone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
       array(
        $client_physique->getNumCni(),
        $client_physique->getNom(),
        $client_physique->getPrenom(),
        $client_physique->getCivilite(),
        $client_physique->getDateDeNaissance (),
        $client_physique->getAdresse(),
        $client_physique->getEmail (),
        $client_physique->getTelephone()
        ));

        if($req){
            echo "<div class='alert alert-success'>Client physique enregistré avec succés </div>";
        }else{
            echo "<div class='alert alert-danger'>Echec d'enregistrement du client physique</div>";
        }
    }



    //function de liste de tabeau des clients physiques
    public function List_client_Physique(){
    $req = self::list("SELECT * FROM client_physique");
    return $req;
     }

}