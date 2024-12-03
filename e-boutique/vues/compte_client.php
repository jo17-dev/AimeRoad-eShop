<?php
    $unClient = $_SESSION['utilisateurConnecte'];

    /**
     * cette vue n'étant reservée qu'as la "vue", les autres actions sur cette page comme la modification des
     * infos admins, tout autre seras rédirigé vers l'action
     */
    if(isset($_GET['action'])){
        if($_GET['action'] != "voirClient"){
            header("Location: ?action=voirClient");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/compte.css">
    <title>Document</title>
</head>
<body>
    <?php include_once("includes/header.php")?>

    <section class="main-container">
        <div class="aside-nav">
            <h5 class="section-title">Gestion des identifants</h5>
            <ul class="item-container">
                <li class="item-list"><a href="#">Modifier mon nom</a></li>
                <li class="item-list"><a href="#">Modifier mon prenom</a></li>
                <li class="item-list"><a href="#">Modifier mon email</a></li>
                <li class="item-list"><a href="#">Modifier mot de passe</a></li>
            </ul>

            <h5 class="section-title">Aller vers...</h5>
            <ul class="item-container">
                <li class="item-list"><a href="?action=voirListeProduit">Liste des produits</a></li>
            </ul>

            <h5 class="section-title">Autre</h5>
            <ul class="item-container">
                <li class="item-list"><a href="index.php?action=seDeconnecter">Déconnexion</a></li>
                <li class="item-list"><a href="#">Supprimer le compte</a></li>
            </ul>
        </div>
        <div class="user-info">
            <h1>Bienvenue <?php echo $unClient['nom'] ?></h1>
            <div class="user-info-raws">
                <img src="img/admin_profile.png" alt="Your profile" class="profile-picture">
                <p class="user-info-item">Nom: <strong><?php echo $unClient['nom'] ?></strong> </p>
                <p class="user-info-item">Prénom: <strong><?php echo $unClient['prenom'] ?></strong> </p>
                <p class="user-info-item">Addresse mail: <strong><?php echo $unClient['email'] ?></strong> </p>
            </div>
        </div>
    </section>
</body>
</html>