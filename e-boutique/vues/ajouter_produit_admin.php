<?php
include_once "models/administrateur.class.php";

if(!is_null($controleur) && isset($_SESSION['utilisateurConnecte']['estAdmin'])){
    $user = new Administrateur($_SESSION['utilisateurConnecte']['id'], $_SESSION['utilisateurConnecte']['nom'], $_SESSION['utilisateurConnecte']['prenom'], $_SESSION['utilisateurConnecte']['email'], $_SESSION['utilisateurConnecte']['password']);

/**
 * cette vue n'étant reservée qu'as la "vue", les autres actions sur cette page comme la modification des
 * infos admins, tout autre seras rédirigé vers l'action
 */
    if(isset($_GET['action'])){
        if($_GET['action'] != "voirAjouterProduit"){
            header("Location: ?action=voirAjouterProduit");
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
    <link rel="stylesheet" href="css/ajouter_produit_admin.css">
    <link rel="stylesheet" href="css/compte.css">
    <link rel="stylesheet" href="css/popup.css">
    <title>Aimeroad</title>
</head>
<body>
    <?php include_once("vues/includes/header.php")?>
    <section class="main-container">
    <?php include_once("vues/includes/admin_side_nav.include.php") ?>
        <div class="user-info">
            <div id="container" >
                <h1>Formulaire de création de produits</h1>
                <form action="?action=creerProduit" method="post">
                    <div>
                        <label for="nom">Nom:</label>
                        <input type="text" name="nom" id="nom" required>
                    </div>
                    <div>
                        <label for="prixUnitaire">Prix unitaire (en USD): </label>
                        <input type="number" name="prixUnitaire" id="prix" required>
                    </div>            
                    <div>
                        <label for="quantitee">Quantitée </label>
                        <input type="number" name="quantite" id="quantitee" required>
                    </div>
                    <div>
                        <label for="photo">Importez une photo<span class="green-text"><small>(*jpg ou png)</small></span> </label>
                        <input type="file" name="photo" id="photo" required>
                    </div>
                    <div>
                        <label for="categorie">Categorie</label>
                        <select name="categorie" id="categorie" required>
                            <option value="4">Chaussures</option>
                            <option value="1">Bijoux</option>
                            <option value="3">Manteaux</option>
                            <option value="2">Chapeaux</option>
                        </select>
                    </div>
                    <div>
                    </div>
                    <div>
                        <button type="submit">Creer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/popup.module.js"></script>
</body>
</html>
