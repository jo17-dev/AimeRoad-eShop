<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery.min.js"></script>
</head>
<body>
    <?php include_once("vues/includes/header.php")?>
    <!-- page de garde haha -->
    <header>
        <div class="left-part">
            <h1><span class="light-green-text" id="texte1">You just found</span> <span class="white-text" id="texte2">Everything</span> <span class="grey-text" id="texte3">You ever</span> <span class="white-text" id="texte4">Wanted</span></h1>
            <div>
                <a href="?action=voirListeProduits" class="go-to-shop-btn" id="btn-voirProduits">Voir les produits</a>
                <a href="?action=voirInscription" class="go-to-shop-btn" id="btn-inscrire">S'inscrire</a>
            </div>
        </div>
        <div class="right-part">
            <div class="circle circle-1"><img src="img/green_coat.jpg" alt="" srcset=""></div>
            <div class="circle circle-2"><img src="img/green_jewelry.png" alt="" srcset=""></div>
            <!-- <div class="circle circle-3"><img src="img/green_shoe.jpg" alt="" srcset=""></div> -->
        </div>
        <script>
        $("#texte1").hide();
        $("#texte2").hide();
        $("#texte3").hide();
        $("#texte4").hide();
        $(".circle").hide();
        $("#btn-voirProduits").hide();
        $("#btn-inscrire").hide();
        $("#texte1").fadeIn(1000);
        $("#texte2").delay(1000).fadeIn(1000);
        $(".circle-1").delay(1500).fadeIn(1000);
        $("#texte3").delay(2000).fadeIn(1000);
        $("#texte4").delay(3000).fadeIn(1000);
        $(".circle-2").delay(3500).fadeIn(1000);
        $("#btn-voirProduits").delay(4000).fadeIn(1000);
        $("#btn-inscrire").delay(4000).fadeIn(1000);
        $(".circle-3").delay(4500).fadeIn(1000);
        </script>

        <script>
        </script>
    </header>
    <h1 class="section-title">Catégories: <span class="section-title-line"></span></h1>
    <!-- liste des cathegories -->
    <section class="categories-container">
        <div class="categories-item">
            <a href="./pages/listeproduits.php?categorie=chaussures">
                <img src="img/chaussures-category.jpg" alt="categories chaussures" class="categories-item-img">
                <p class="categories-item-name">Chaussures</p>
            </a>
        </div>
        <div class="categories-item">
            <a href="./pages/listeproduits.php?categorie=bijoux">
                <img src="img/bijoux-category.jpg" alt="categories des bijoux" class="categories-item-img">
                <p class="categories-item-name">Bijoux</p>
            </a>
        </div>
        <div class="categories-item">
            <a href="./pages/listeproduits.php?categorie=manteaux">
                <img src="img/mantaux-category.jpg" alt="categories de Manteaux" class="categories-item-img">
                <p class="categories-item-name">Manteaux</p>
            </a>
        </div>
        <div class="categories-item">
            <a href="./pages/listeproduits.php?categorie=chapeaux">
                <img src="img/chapeaux-category.jpg" alt="categories des Chapeaux" class="categories-item-img">
                <p class="categories-item-name">Chapeaux</p>
            </a>
        </div>
    </section>
    <!-- section des contacts -->
    <h1 class="section-title" id="a_propos">À propos: <span class="section-title-line"></span></h1>
    <section class="section about-section">
        <h3>
        <p>
            AimerRoad, créé en 2024 par 4 jeunes talentueux sous les noms de Joel Bertrand Tsafack, Sami Riadh Allag, Niko Daryl Lucienne et
            Chaki Aymane, est un site qui promet des articles de qualité de luxe en <span class="light-green-text">émeraude</span>, avec une interface facile à comprendre
            qui permet de les accéder facilement juste en quelque clics.
        </p>
        <br>
        <p>
            Sur notre boutique en ligne, nous offrons à nos clients une panoplie de choix tendance à travers 
            quatre catégories d'accessoires : manteaux, chapeaux, bijoux, et chaussures. Le nom de notre boutique fait référence 
            au choix unique de la couleur de nos articles, exclusivement en émeraude, ce magnifique vert qui rappelle également 
            un précieux joyau. Nous vous invitons à emprunter cette merveilleuse <span class="light-green-text">route</span> vers une expérience de magasinage inoubliable 
            sur notre site, que vous allez certainement <span class="light-green-text">aimer!</span>
        </p>
        </h3>
    </section>
    <!-- footer part -->
    <?php include_once("vues/includes/footer.php")?>
</body>
</html>