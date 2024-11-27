<?php
include_once "../models/dao/clientDAO.class.php";
include_once "../models/administrateur.class.php";
// controller de la classe admin
session_start();

// Si la session n'est pas trouvée, on vas générer un id comme ça
    // if(!isset($_SESSION["user"])){
    //     header("location: index.php");
    // }

$user;
// TODO à enlever pour remplacer par les données de la session
$result = ClientDAO::chercherParId(2)[0];

$user = new Administrateur($result["id"], $result["nom"], $result["prenom"], $result["email"], $result["password"]);


// ici , on suppose que l'utilisateur(admin) a déjas été authentifié.


    // 2e etape: definition de toutes les action possibles sur la page: gestion du crud

// if(isset($_GET[""]))
?>