<?php
    if(is_null($controleur)){
        header("Location: ?action='' ");

    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de magasinage</title>
    <link rel="stylesheet" href="css/listeproduits.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script>
    /*
Notions indispensables

Je vais ici vous parler de deux notions indispensables : les fonctions de rappel et le chaînage de méthodes.
Fonctions de rappel

Une fonction de rappel (ou callback en anglais) est une fonction exécutée
lorsqu'une autre fonction a terminé de s'exécuter.
En jQuery, les fonctions de rappel sont essentiellement utilisées
pour réaliser des animations et des appels AJAX.
Nous reviendrons sur ces deux sujets dans la partie 3 du cours.

Juste pour vous mettre l'eau à la bouche, voici
 un exemple de fonction de rappel,
appliquée aux éléments de classe rouge :
	
*/

    $(function () {
      
      $(".boutton-add-panier").hide();
      $(".boutton-add-panier").fadeIn(700);

    });
  </script>

</head>
<body>
   <!--Barre de navigation sur toutes les pages-->
    <?php include_once("vues/includes/header.php")?>
 
    <!-- Titre de la page en plus de la barre de recherche avec un filtres(...specifications a add plus tard pour rendre plus intérésent cateégories etc) -->
    <h1>Notre Collection d'articles Emeraudes</h1>
 
    <div class="espace_recherche">
        <form action="listeproduits.html">
            <label class="debut_espace_recherche" for="produit-cherché">Recherche:</label>
            <input type="chercher" id="produit-cherché" name="q" />
   
            <button>Chercher</button>
           <!-- <img src="img/icone-filtre.png" title="filtrer la recherche" alt="filtrer" class="filtre"> -->

        </form>
    </div>
 
    <!-- Section des produits avec leurs div (les grilles (grids))-->
    <div class="products-section">
        
                <!-- Produits lignes 1-3(A repeter 3 fois car je veux 3 fois sur une rangee de 5 produits(3 produits par lignes/5 produits par rangees)) -->
            <div class="products-grid">
            <?php foreach ($controleur-> getTabProduits() as $produit){ ?>
                <div class="boite_produit">
                    <img src="<?php echo $produit -> getUrlPhoto() ?>" title="image produit" alt="image du produit" class="img-produits" >
                    <h2 class="titre_du_produit"><?php echo $produit->getNom()  ?> </h2>
                    <p class="description-du-produit"> <?php echo $produit -> getCategorie() ?></p>
                    <div class="prix-produit"> <?php echo $produit -> getPrixUnitaire() . "$" ?></div>
                    <button class="boutton-add-panier"><a class="btn-content" href="?action=ajouterPanier">Ajouter au panier</a> </button>
                </div>
                <?php } ?>
            </div>
    </div>
</section>
<!-- footer part -->
    <?php include_once("vues/includes/footer.php")?>
</body>
</html>