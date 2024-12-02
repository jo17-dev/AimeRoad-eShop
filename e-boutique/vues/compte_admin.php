<?php
include_once "models/administrateur.class.php";

if(!is_null($controleur) && isset($_SESSION['utilisateurConnecte']['estAdmin'])){
    $user = new Administrateur($_SESSION['utilisateurConnecte']['id'], $_SESSION['utilisateurConnecte']['nom'], $_SESSION['utilisateurConnecte']['prenom'], $_SESSION['utilisateurConnecte']['email'], $_SESSION['utilisateurConnecte']['password']);

/**
 * cette vue n'étant reservée qu'as la "vue", les autres actions sur cette page comme la modification des
 * infos admins, tout autre seras rédirigé vers l'action
 */
    if(isset($_GET['action'])){
        if($_GET['action'] != "voirAdmin"){
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
    <title>Aimeroad</title>
</head>
<body>
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
        <div class="aside-nav">
            <h5 class="section-title">Gestion des identifants</h5>
            <ul class="item-container">
                <li class="item-list" onclick="afficherPopUpUser('nom')"><a href="#">Modifier mon nom</a></li>
                <li class="item-list" onclick="afficherPopUpUser('prenom')"><a href="#">Modifier mon prenom</a></li>
                <li class="item-list" onclick="afficherPopUpUser('email')"><a href="#">Modifier mon email</a></li>
                <li class="item-list" onclick="afficherPopUpUser('password')"><a href="#">Modifier mot de passe</a></li>
            </ul>

            <h5 class="section-title">Aller vers...</h5>
            <ul class="item-container">
                <li class="item-list"><a href="?action=listeProduitsAdmin">Voir le stock</a></li>
                <li class="item-list"><a href="?action=historiqueCommandesAdmin">Commandes</a></li>
            </ul>

            <h5 class="section-title">Autre</h5>
            <ul class="item-container">
                <li class="item-list"><a href="index.php?action=seDeconnecter">Déconnexion</a></li>
                <li class="item-list" onclick="afficherPopUpSupression()"><a href="#">Supprimer le compte</a></li>
            </ul>
        </div>
        <div class="user-info">
            <h1>Bienvenue <?php echo $user->getNom() ?> !</h1>
            <div class="user-info-raws">
                <img src="img/admin_profile.png" alt="Your profile" class="profile-picture">
                <p class="user-info-item">Nom: <strong> <?php echo $user->getNom() ?> </strong> </p>
                <p class="user-info-item">Prénom: <strong> <?php echo $user->getPrenom() ?> </strong> </p>
                <p class="user-info-item">Addresse mail: <strong><?php echo $user->getEmail() ?></strong> </p>
            </div>
        </div>
    </section>
    <script src="js/popup.module.js"></script>
    <!-- footer part -->
    <!-- <footer>
        <div class="footer-contact-info">
            <div>
                <img src="./img/logo-320x60.png" alt="AimeRoad">
                <p>Aimeroad</p>
                <p>Articles de marque</p>

            </div>
            <div>
                <h4>Développeurs(e)s</h4>
                <p>Joël</p>
                <p>Daryl</p>
                <p>Sami</p>
                <p>Aymane</p>
                <p><a href="mailto:620022crosemont.qc.ca">préocupations</a></p>
            </div>
            <div>
                <h4>Service à la clientèlle</h4>
                <p>Nous sommes disponibles tous les jours, H-24</p>
                <address>support@aimeroad.com</address>
            </div>
        </div>
        <div>
            <p>Copyright 2024. projet de classe</p>
        </div>
    </footer> -->
</body>
</html>