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
                <li class="item-list"><a href="index.php?action=historiqueCommandesAdmin">Clients</a></li>
            </ul>

            <h5 class="section-title">Autre</h5>
            <ul class="item-container">
                <li class="item-list"><a href="index.php?action=seDeconnecter">Déconnexion</a></li>
                <li class="item-list" onclick="afficherPopUpSupression()"><a href="#">Supprimer le compte</a></li>
            </ul>
        </div>
        <div class="user-info">
            <h1>Liste des clients.</h1>
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
                                <a class="wrapper" href="?action=surprimerDroitsAdmin"><button class="btn-rights btn-delete-account" >Suprimer les droits admin</button></a>
                            <?php }else{ ?>
                                <a class="wrapper" href="?action=ajouterDroitsAdmin&idClient=<?php echo $compte['id'] ?>" ><button class="btn-rights">Ajouter les droits admin</button></a>
                            <?php } ?>
                        </td>
                        <td> <button class="btn-rights btn-delete-account" >supprimer compte</button> </td>
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