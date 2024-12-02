<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter - AimeRoad</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>

    <div class="logo">
    <a href="?action=voirAcceuil"><img src="img/logo-320x60.png" alt=""></a>
    </div>

    <div class="texte">
    <h1>Connexion</h1>
    </div>

    <div class="infos">
    <div></div>
    <form action="?action=seConnecter" method="post">

        <div class="info">
        <label for="adresse">Adresse courriel</label><br>
        <input type="email" name="adresse" id="adresse" required><br>
        </div>

        <div class="info">
        <label for="motDePasse">Mot de passe</label><br>
        <input type="password" name="motDePasse" id="motDePasse" required><br>
        </div>

        <div class="info">
        <label for="seSouvenir">Se souvenir</label>
        <input type="checkbox" title="seSouvenir" name="seSouvenir" id="seSouvenir"><br>
        </div>

        <div class="info" id="bouton">
        <button type="submit">Se Connecter</button>
        </div>

        <div class="info">
        <a href="?action=voirInscription" title="Créer un nouveau compte AimeRoad">S'inscrire</a><br>
        </div>

    </form>
    <div></div>
    </div>

</body>
</html>