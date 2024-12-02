<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/init.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/liste_produits_admin.css">
    <title>Ameroad - liste des produits</title>
</head>
<body>
    <nav class="nav-bar">
        <img src="img/logo-320x60.png" class="logo" alt="Aimeroad">
        <ul class="links">
            <li><a href="?">Accueil</a></li>
            <li><a href="?">À propos</a></li>
            <li><a href="?">Contact</a></li>
        </ul>
        <ul class="user-panel">
            <li>
                <a href="index.php?action=login" title="click to view your cart"><img src="img/panier-320x320.png" alt="login"></a>
            </li>
            <li>
                <a href="?action=voirAdmin" title="click to login or connect"><img src="img/compte-320x320.png" alt="login"></a>
            </li>
        </ul>
    </nav>
    <h1 class="title">Historique des commandes:</h1>
    <table>
        <thead>
            <td>indentifiant</td>
            <td>client</td>
            <td>Prix total </td>
            <td>Date de commande</td>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
            <tr>
                <td>1</td>
                <td>client@gmail.com</td>
                <td>250 $</td>
                <td>2024-11-22 14:49:45</td>
            </tr>
        </tbody>
    </table>
</body>
</html>