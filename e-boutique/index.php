<?php

include_once "controleurs/controleurManifacture.class.php";

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