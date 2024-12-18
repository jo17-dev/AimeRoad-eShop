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
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 1</h2>
                <p class="description-du-produit">Description du produit 1.</p>
                <div class="prix-produit">29.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 2</h2>
                <p class="description-du-produit">Description du produit 2.</p>
                <div class="prix-produit">39.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 3</h2>
                <p class="description-du-produit">Description du produit 3.</p>
                <div class="prix-produit">49.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
        </div>
 
        <!-- Produit 4-6(A repeter 3 fois car je veux 3 fois sur une rangee de 5 produits) -->
        <div class="products-grid">
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 4</h2>
                <p class="description-du-produit">Description du produit 4.</p>
                <div class="prix-produit">29.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 5</h2>
                <p class="description-du-produit">Description du produit 5.</p>
                <div class="prix-produit">39.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 6</h2>
                <p class="description-du-produit">Description du produit 6.</p>
                <div class="prix-produit">49.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
        </div>
 
       <!-- Produit 7-9(A repeter 3 fois car je veux 3 fois sur une rangee de 5 produits) -->
        <div class="products-grid">
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 7</h2>
                <p class="description-du-produit">Description du produit 7.</p>
                <div class="prix-produit">29.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 8</h2>
                <p class="description-du-produit">Description du produit 8.</p>
                <div class="prix-produit">39.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 9</h2>
                <p class="description-du-produit">Description du produit 9.</p>
                <div class="prix-produit">49.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
        </div>
 
        <!-- Produit 10-12(A repeter 3 fois car je veux 3 fois sur une rangee de 5 produits) -->
        <div class="products-grid">
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 10</h2>
                <p class="description-du-produit">Description du produit 10.</p>
                <div class="prix-produit">29.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 11</h2>
                <p class="description-du-produit">Description du produit 11.</p>
                <div class="prix-produit">39.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 12</h2>
                <p class="description-du-produit">Description du produit 12.</p>
                <div class="prix-produit">49.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
        </div>
 
        <!-- Produit 13-15(A repeter 3 fois car je veux 3 fois sur une rangee de 5 produits(3 produits par lignes/5 produits par rangees)) -->
        <div class="products-grid">
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 13</h2>
                <p class="description-du-produit">Description du produit 13.</p>
                <div class="prix-produit">29.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 14</h2>
                <p class="description-du-produit">Description du produit 14.</p>
                <div class="prix-produit">39.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
            <div class="boite_produit">
                <img src="img/produit-demo.jpg" title="image produit" alt="image du produit" class="img-produits" >
                <h2 class="titre_du_produit">Produit 15</h2>
                <p class="description-du-produit">Description du produit 15.</p>
                <div class="prix-produit">49.99$</div>
                <button class="boutton-add-panier">Ajouter au panier</button>
            </div>
        </div>
    </div>
</section>
<!-- section des contacts -->
<h1 class="section-title">À propos: <span class="section-title-line"></span></h1>
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