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
    <link rel="stylesheet" href="css/popup.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav-bar">
        <img src="img/logo-320x60.png" class="logo" alt="Aimeroad">
        <ul class="links">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="">À propos</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <ul class="user-panel">
            <li>
                <a href="./vues/connexion.php" title="click to view your cart"><img src="img/panier-320x320.png" alt="login"></a>
            </li>
            <li>
                <a href="?action=voirConnexion" title="click to login or connect"><img src="img/compte-320x320.png" alt="login"></a>
            </li>
        </ul>
    </nav>
    <section class="main-container">
        <!-- ajouter la left nav bar -->
         <?php include_once("vues/includes/client_side_nav.include.php") ?>
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
    <script src="js/popupClient.module.js"></script>
</body>
</html>