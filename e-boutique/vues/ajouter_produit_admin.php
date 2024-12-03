<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ajouter_produit_admin.css">
    <title>Aimeroad</title>
</head>
<body>
    <?php include_once("includes/header.php")?>
    <div id="container">
        <h1>Formulaire de création de produit</h1>
        <form action="?action=creerProduit" method="post">
            <div>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="prix">Prix unitaire (en USD): </label>
                <input type="number" name="prix" id="prix" required>
            </div>            
            <div>
                <label for="quantitee">Quantitée </label>
                <input type="number" name="quantitee" id="quantitee" required>
            </div>
            <div>
                <label for="photo">Importez une photo<span class="green-text"><small>(*jpg ou png)</small></span> </label>
                <input type="file" name="photo" id="photo" required>
            </div>
            <div>
                <label for="categorie">Categorie</label>
                <select name="categorie" id="categorie" required>
                    <option value="chaussures">Chaussures</option>
                    <option value="bijoux">Bijoux</option>
                    <option value="manteaux">Manteaux</option>
                    <option value="chapeaux">Chapeaux</option>
                </select>
            </div>
            <div>
                <label for="couleurs">Couleures disponibles</label>
                <div>
                    <input class="checkbox" type="checkbox" name="couleurs">Verte</input>
                </div>
                <div>
                    <input class="checkbox" type="checkbox" name="couleurs">Bleue</input>
                </div>
                <div>
                    <input class="checkbox" type="checkbox" name="couleurs">Rouge</input>
                </div>
                <div>
                    <input class="checkbox" type="checkbox" name="couleurs">Jaune</input>
                </div>
                <input type="text" name="couleurs">couleurs personnalisées <small><span class="green-text">*séparer les couleures par les virgules</span></small></input>
            </div>
            <div>
                <button type="submit">Creer</button>
            </div>
        </form>
    </div>
        <!-- footer part -->
        <?php include_once("includes/footer.php")?>
</body>
</html>