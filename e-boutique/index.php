<?php

include_once "controleurs/controleurManifacture.class.php";

// $view = "index";

// // controleurManifacture::creer

// if(isset($_GET["view"])){
//     $view = $_GET["view"];
// }

// header("location: vues/". $view . ".php");

include 'header.php'; ?>

<section>
    <h2>Page d'accueil</h2>
    <p>Ceci est le contenu principal de la page d'accueil.</p>
</section>

<?php include 'footer.php'; 
?>



<?php
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