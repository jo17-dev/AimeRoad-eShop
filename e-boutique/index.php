<?php

include_once "controleurs/controleurManifacture.class.php";

// $view = "index";

// // controleurManifacture::creer

// if(isset($_GET["view"])){
//     $view = $_GET["view"];
// }

// header("location: vues/". $view . ".php");





//----------- version 2 du de ce truc: créer un organe routeur pour définir toutes les url possibles:

$action = "";
$view = "index";

$controleur = null;

if(isset($_GET["action"])){
    $action = $_GET["action"];

    $controleur = ControleurManifacture::creerControleur($action);

    $view = $controleur->executerAction();
}

include_once("vues/". $view . ".php");


?>