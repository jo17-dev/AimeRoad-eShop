<?php
include_once "models/administrateur.class.php";

if(!is_null($controleur) && isset($_SESSION['utilisateurConnecte']['estAdmin'])){
    $user = new Administrateur($_SESSION['utilisateurConnecte']['id'], $_SESSION['utilisateurConnecte']['nom'], $_SESSION['utilisateurConnecte']['prenom'], $_SESSION['utilisateurConnecte']['email'], $_SESSION['utilisateurConnecte']['password']);

/**
 * cette vue n'étant reservée qu'as la "vue", les autres actions sur cette page comme la modification des
 * infos admins, tout autre seras rédirigé vers l'action
 */
    if(isset($_GET['action'])){
        if($_GET['action'] != "historiqueCommandesAdmin"){
            header("Location: ?action=voirAdmin");
        }
    }

}else{
    header("Location: ?action=''");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/compte.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/liste_produits_admin.css">
    <title>Aimeroad</title>
</head>
<body>
    <?php include_once("includes/header.php")?>

    <h1 class="title">Historique des commandes:</h1>
    <table>
        <thead>
            <td>indentifiant</td>
            <td>client</td>
            <td>Prix total </td>
            <td>Date de commande</td>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
        </tbody>
    </table>
    <nav class="nav-bar">
        <img src="img/logo-320x60.png" class="logo" alt="Aimeroad">
        <ul class="links">
            <li><a href="?">Accueil</a></li>
            <li><a href="">À propos</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <ul class="user-panel">
            <li>
                <a href="./pages/connexion.php" title="click to view your cart"><img src="img/panier-320x320.png" alt="login"></a>
            </li>
            <li>
                <a href="./pages/connexion.php" title="click to login or connect"><img src="img/compte-320x320.png" alt="login"></a>
            </li>
        </ul>
    </nav>
    <section class="main-container">
        <!-- nav bar here -->
        <?php include_once("vues/includes/admin_side_nav.include.php") ?>
        <div class="user-info">
            <h1 class="title">Liste des commandes actives:</h1>
            <table>
                <thead>
                    <td>indentifiant</td>
                    <td>client</td>
                    <td>Prix total </td>
                    <td>Date de commande</td>
                </thead>
                <tbody>
                    <tr><td colspan='4' class='no-datas-warning'>Aucune donnée n'est encore disponible</td></tr>
                </tbody>
            </table>
        </div>
    </section>
    <script src="js/popup.module.js"></script>
</body>
</html>