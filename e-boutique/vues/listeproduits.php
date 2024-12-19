<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de magasinage</title>
    <link rel="stylesheet" href="css/listeproduits.css">
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
            <img src="img/icone-filtre.png" title="filtrer la recherche" alt="filtrer" class="filtre">
        </form>
    </div>
 
    <!-- Section des produits avec leurs div (les grilles (grids))-->
    <div class="products-section">

                <!-- Produits lignes 1-3(A repeter 3 fois car je veux 3 fois sur une rangee de 5 produits(3 produits par lignes/5 produits par rangees)) -->
            <div class="products-grid">
            <?php foreach($controleur->getTabProduits() as $produit){ ?>
                <div class="boite_produit">
                    <img src="<?php echo $produit->getUrlPhoto(); ?>" title="image produit" alt="image du produit" class="img-produits" >
                    <h2 class="titre_du_produit"> <?php echo $produit->getNom() ?> </h2>
                    <p class="description-du-produit">Description du produit 1.</p>
                    <div class="prix-produit"> <?php echo $produit->getPrixUnitaire() . "$" ?>  </div>
                    <button class="boutton-add-panier"> <a class="btn-content" href="?action=ajouterPanier">Ajouter au panier</a> </button>
                </div>
            <?php } ?>
            </div>

    </div>
</section>
<section class="section about-section">
    <p>Sur notre boutique en ligne, nous offrons à nos clients une panoplie de choix tendance 
        à travers quatre catégories d’accessoires : manteaux, chapeaux, bijoux, et chaussures. Le nom de notre boutique fait référence au choix unique 
        de la couleur de nos articles, exclusivement en émeraude, ce magnifique vert qui rappelle également un précieux joyau. 
        Nous vous invitons à emprunter cette merveilleuse route vers une expérience de magasinage inoubliable sur notre site, 
        que vous allez certainement aimer!</p>
</section>
<!-- footer part -->
    <?php include_once("vues/includes/footer.php")?>
</body>
</html>