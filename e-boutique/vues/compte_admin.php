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
    <?php include_once("vues/includes/header.php")?>

    <section class="main-container">
        <!-- nav bar here -->
        <?php include_once("vues/includes/admin_side_nav.include.php") ?>
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
</body>
</html>