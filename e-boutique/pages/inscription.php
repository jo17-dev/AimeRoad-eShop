<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - AimeRaud</title>
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body>
<div class="logo">
    <a href="../index.html"><img src="../img/logo-320x60.png" alt=""></a>
    </div>

    <div class="texte">
    <h1>Inscription</h1>
    </div>

    <div class="infos">
    <div></div>
    <form action="" method="post">

        <div class="info">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom" required><br>
        </div>

        <div class="info">
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" required><br>
        </div>

        <div class="info">
        <label for="adresse">Adresse Courriel</label><br>
        <input type="email" name="adresse" id="adresse" required><br>
        </div>

        <div class="info">
        <label for="num">Numéro de téléphone</label><br>
        <input type="tel" name="num" id="num" required>
        </div>

        <div class="info">
        <label for="mdp">Mot de passe</label><br>
        <input type="password" name="mdp" id="mdp" required>
        </div>

        <div class="info">
        Vous possédez un compte?<br>
        <a href="./connexion.php" title="">Se connecter</a><br>
        </div>

        <div class="info" id="bouton">
        <button type="submit">S'inscrire</button>
        </div>

    </form>
    <div></div>
    </div>

</body>
</html>