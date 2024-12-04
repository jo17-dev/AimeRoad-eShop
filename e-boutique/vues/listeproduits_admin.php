<?php
include_once "models/administrateur.class.php";

if(!is_null($controleur) && isset($_SESSION['utilisateurConnecte']['estAdmin'])){
    $user = new Administrateur($_SESSION['utilisateurConnecte']['id'], $_SESSION['utilisateurConnecte']['nom'], $_SESSION['utilisateurConnecte']['prenom'], $_SESSION['utilisateurConnecte']['email'], $_SESSION['utilisateurConnecte']['password']);

/**
 * cette vue n'étant reservée qu'as la "vue", les autres actions sur cette page comme la modification des
 * infos admins, tout autre seras rédirigé vers l'action
 */
    if(isset($_GET['action'])){
        if($_GET['action'] != "voirListeProduits"){
            header("Location: ?action=voirListeProduits");
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
    <?php include_once("vues/includes/header.php")?>

    <section class="main-container">
        <?php include_once("vues/includes/admin_side_nav.include.php") ?>
        <div class="user-info">
            <h1>Liste des produits.</h1>
            <section class="controls-container">
                <a class="wrapper" href="?action=voirAjouterProduit"><button class="btn-rights add-btn" >Ajouter un produit</button></a>
            </section>
            <table>
                <thead>
                    <td>code</td>
                    <td>categorie</td>
                    <td>prix unitaire </td>
                    <td>Quantitée disponible</td>
                    <td colspan="2" >Actions</td>
                </thead>
                <tbody>
                    <?php
                        if(count($controleur->getTabProduits()) == 0){
                            echo "<tr><td colspan='5' class='no-datas-warning'>Aucune donnée disponible pour cet affichage</td></tr>";
                        }else{
                            foreach($controleur->getTabProduits() as $compte){
                    ?>
                    <tr>
                        <td> <?php echo $compte['id'] ?> </td>
                        <td><?php echo $compte['nom'] ?></td>
                        <td><?php echo $compte['prixUnitaire'] . "$" ?></td>
                        <td><?php echo $compte['quantite'] ?></td>
                        <td>
                            <a class="wrapper" href="?action=surprimerDroitsAdmin&idClient=<?php echo $compte['id'] ?>"><button class="btn-rights" >Modifier</button></a>
                        </td>
                        <td>
                        <a class="wrapper" href="?action=suprimerCompte&idClient=<?php echo $compte['id'] ?>" >
                            <button class="btn-rights btn-delete-account" >Supprimer</button>
                        </a>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <script src="js/popup.module.js"></script>

</body>
</html>