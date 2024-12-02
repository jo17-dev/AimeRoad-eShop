<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav-bar">
        <img src="img/logo-320x60.png" class="logo" alt="Aimeroad">
        <ul class="links">
            <li><a href="?action=voirAcceuil">Accueil</a></li>
            <li><a href="">À propos</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <ul class="user-panel">
            <li>
                <a href="../index.php?view=PagePanier" title="click to view your cart"><img src="img/panier-320x320.png" alt="login"></a>
            </li>
            <li>
                <a href="?action=voirConnexion" title="click to login or connect"><img src="img/compte-320x320.png" alt="login"></a>
            </li>
        </ul>
    </nav>
    <!-- page de garde haha -->
    <header>
        <div class="left-part">
            <h1><span class="light-green-text">You just found</span> <span class="white-text">Everything</span> <span class="grey-text">You ever</span> <span class="white-text">Wanted</span></h1>
            <div>
                <a href="./pages/listeproduits.html" class="go-to-shop-btn">Voir les produits</a>
                <a href="./pages/inscription.php" class="go-to-shop-btn">S'inscrire</a>
            </div>
        </div>
        <div class="right-part">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
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
    <h1 class="section-title">À propos: <span class="section-title-line"></span></h1>
    <section class="section about-section">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur natus reiciendis cum veritatis, est aliquid, nemo temporibus tempore, ipsum adipisci totam explicabo eveniet at? Exercitationem nemo iusto numquam tempora debitis.
        Blanditiis quae dolores reprehenderit laborum doloremconsequatur quas aliquam quia similique sed velit voluptates illo neque expedita nihil non fugiat fuga sequi assumenda dolorum, facilis excepturi, nemo perspiciatis ab! Harum!
        Quos tenetur, eveniet sint maiores inventore eos reiciendis eligendi aut aperiam commodi ratione voluptatem atque provident eaque nobis mollitia doloremque, ad tempora? Ipsam consectetur, neque iusto cupiditate facere unde libero?
        Non aperiam consequuntur beatae odit doloribus perspiciatis sapiente nostrum porro veritatis, saepe nihil dolore consectetur ut incidunt magnam. Ipsa facilis qui iure totam similique consequuntur nihil possimus quam iste unde.
        Eaque sit aspernatur id asperiores, deserunt autem ipsa alias, doloremque ratione odit nemo aut amet nesciunt velit ipsam assumenda reiciendis ex voluptas iure. Possimus, ipsam eos omnis quaerat incidunt vero.</p>
    </section>
    <!-- footer part -->
    <footer>
        <div class="footer-contact-info">
            <div>
                <img src="img/logo-320x60.png" alt="AimeRoad">
                <p>Aimeroad</p>
                <p>Articles de marque</p>

            </div>
            <div>
                <h4>Développeurs(e)s</h4>
                <p>Joël</p>
                <p>Daryl</p>
                <p>Sami</p>
                <p>Aymane</p>
                <p><a href="mailto:620022crosemont.qc.ca">préocupations</a></p>
            </div>
            <div>
                <h4>Service à la clientèlle</h4>
                <p>Nous sommes disponibles tous les jours, H-24</p>
                <address>support@aimeroad.com</address>
            </div>
        </div>
        <div>
            <p>Copyright 2024. projet de classe</p>
        </div>
    </footer>
</body>
</html>