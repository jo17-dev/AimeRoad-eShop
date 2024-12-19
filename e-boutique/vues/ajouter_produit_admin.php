<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ajouter_produit_admin.css">
    <title>Aimeroad</title>
</head>
<body>
    <?php include_once("vues/includes/header.php")?>
    <div id="container">
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
</body>
</html>
