<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Model/Insert_client_physique.php';
require_once '../Model/Class_Client_Physique.php';

$principal = new principal_physique();


if(isset($_POST['btn2'])) {

   $client_physique = new Client_Physique(array(
       'numCni'=>trim($_POST['numCni'], ' '),
       'nom'=>trim($_POST['nom'], ' '),
       'prenom'=> trim($_POST['prenom'], ' '),
       'civilite'=> trim($_POST['civilite'], ' '),
       'DateDeNaissance'=>trim($_POST['DateDeNaissance'], ' '),
       'adresse'=>trim($_POST['adresse'], ' '),
       'email'=>trim($_POST['email'], ' '),
       'telephone'=> trim($_POST['telephone'], ' ')
   ));

   $principal->Ajout_client_Physique($client_physique);

 }