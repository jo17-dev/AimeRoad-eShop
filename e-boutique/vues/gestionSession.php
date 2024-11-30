<?php 
include("../models/dao/clientDAO.class.php");

$temps =  time();
// on récupère la session ou on en crée une nouvelle
session_start();
// Si un formulaire post a été soumis
if (isset($_POST['adresse']) and isset($_POST['motDePasse'])) {
    $unClient = ClientDAO::chercherParEmail($_POST['adresse']);
    $unMotDePasse = hash("sha256", $_POST['motDePasse']);
    // Si l'utilisateur existe et le mot de passe existent et qu'ils appartiennent au même utilisateur, se connecte
    if ($unClient['password'] == $unMotDePasse) {
        $_SESSION['utilisateurConnecte'] = $_POST['adresse'];

        if ((isset($_POST["seSouvenir"]) && $_POST["seSouvenir"] != null)) {
            // Cookie se souvenir
            setcookie("seSouvenir", $_POST["seSouvenir"], time() + (60 * 10)); // Druée : le temps courant + 10 minutes
        }
        header("Location: compte_client.php");
    } else {
        header("Location: connexion.php");
    }
} else {
    header("Location: connexion.php");
}



?>