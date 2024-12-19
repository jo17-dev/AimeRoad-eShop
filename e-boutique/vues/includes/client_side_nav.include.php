<div class="aside-nav">
    <button id="toggle-side-bar" class="toggle-side-bar">réduire</button>
    <h5 class="section-title">Gestion des identifants</h5>
    <ul class="item-container">
        <li class="item-list" onclick="afficherPopUpUser('nom')"><a href="#">Modifier mon nom</a></li>
        <li class="item-list" onclick="afficherPopUpUser('prenom')"><a href="#">Modifier mon prenom</a></li>
        <li class="item-list" onclick="afficherPopUpUser('email')" ><a href="#">Modifier mon email</a></li>
        <li class="item-list" onclick="afficherPopUpUser('password')"><a href="#">Modifier mot de passe</a></li>
    </ul>

    <h5 class="section-title">Aller vers...</h5>
    <ul class="item-container">
        <li class="item-list"><a href="?action=voirListeProduits">Liste des produits</a></li>
    </ul>

    <h5 class="section-title">Autre</h5>
    <ul class="item-container">
        <li class="item-list"><a href="index.php?action=seDeconnecter">Déconnexion</a></li>
        <li class="item-list"><a href="">Supprimer le compte</a></li>
    </ul>
</div>
<script src="js/toggle_side_nav.js"></script>