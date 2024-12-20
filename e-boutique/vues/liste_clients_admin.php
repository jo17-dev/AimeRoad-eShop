<?php
include_once "models/administrateur.class.php";

if(!is_null($controleur) && isset($_SESSION['utilisateurConnecte']['estAdmin'])){
    $user = new Administrateur($_SESSION['utilisateurConnecte']['id'], $_SESSION['utilisateurConnecte']['nom'], $_SESSION['utilisateurConnecte']['prenom'], $_SESSION['utilisateurConnecte']['email'], $_SESSION['utilisateurConnecte']['password']);

/**
 * cette vue n'étant reservée qu'as la "vue", les autres actions sur cette page comme la modification des
 * infos admins, tout autre seras rédirigé vers l'action
 */
    if(isset($_GET['action'])){
        if($_GET['action'] != "voirListeClients"){
            header("Location: ?action=voirListeClients");
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
            <h1>Liste des clients.</h1>
            <div class="content-wrapper">
                <table>
                    <thead>
                        <td>code</td>
                        <td>Nom</td>
                        <td>Prenom </td>
                        <td>Email</td>
                        <td colspan="2" >Actions</td>
                    </thead>
                    <tbody>
                        <?php
                            if(count($controleur->getListeClients()) == 0){
                                echo "<tr><td colspan='5' class='no-datas-warning'>Aucune donnée disponible pour cet affichage</td></tr>";
                            }else{
                                foreach($controleur->getListeClients() as $compte){
                        ?>
                        <tr>
                            <td> <?php echo $compte['id'] ?> </td>
                            <td><?php echo $compte['nom'] ?></td>
                            <td><?php echo $compte['prenom'] ?></td>
                            <td><?php echo $compte['email'] ?></td>
                            <td>
                                <?php if(isset($compte['idClient'])){ // si le compte est un compte admin, on peux seuleument retirer ses droits?>
                                    <a class="wrapper" href="?action=surprimerDroitsAdmin&idClient=<?php echo $compte['id'] ?>"><button class="btn-rights btn-delete-account" >Suprimer les droits admin</button></a>
                                <?php }else{ ?>
                                    <a class="wrapper" href="?action=ajouterDroitsAdmin&idClient=<?php echo $compte['id'] ?>" ><button class="btn-rights">Ajouter les droits admin</button></a>
                                <?php } ?>
                            </td>
                            <td>
                            <a class="wrapper" href="?action=suprimerCompte&idClient=<?php echo $compte['id'] ?>" >
                                <button class="btn-rights btn-delete-account" >supprimer compte</button>
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
        </div>
    </section>
    <script src="js/popup.module.js"></script>

</body>
</html>