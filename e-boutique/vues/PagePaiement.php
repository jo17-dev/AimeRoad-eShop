<?php

include_once "e-boutique/controleurs/PaiementControleur.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paiementControleur = new PaiementControleur();

   
    $nomComplet = $_POST['nom_complet'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $province = $_POST['province'];
    $codePostal = $_POST['code_postal'];
    $nomCarte = $_POST['nom_carte'];
    $numeroCarte = $_POST['numero_carte'];
    $moisExpiration = $_POST['mois_expiration'];
    $anneeExpiration = $_POST['annee_expiration'];
    $cvv = $_POST['cvv'];

    
    $paiementControleur->traiterPaiement($nomComplet, $email, $adresse, $ville, $province, $codePostal, $nomCarte, $numeroCarte, $moisExpiration, $anneeExpiration, $cvv);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/PagePaiment.css">

</head>
<body>
    
<div class="container">
    <form action="">
        <div class="row">
            <div class="column">
                <h3 class="title">Adresse de facturation</h3>

                <div class="input-Box">
                    <label>Nom complet :</label>
                    <input type="text"  name="nom_complet" placeholder="Entrez le nom complet" required />
                </div>
                <div class="input-Box">
                    <label>Email :</label>
                    <input type="email" name="email" placeholder="Entrez l'email" required />
                </div>
                <div class="input-Box">
                    <label>Adresse :</label>
                    <input type="text" name="adresse" placeholder="Entrez votre adresse" required />
                </div>
                <div class="input-Box">
                    <label>Ville :</label>
                    <input type="text" name="ville" placeholder="Entrez votre ville" required />
                </div>

                <div class="flex">
                    <div class="input-Box">
                        <label>Province :</label>
                        <input type="text" name="province" placeholder="Entrez votre province" required />
                    </div>
                    <div class="input-Box">
                        <label>Code postal :</label>
                        <input type="text" name="code_postal" placeholder="Entrez le code postal" required />
                    </div>
                </div>

            </div>

            <div class="column">

                <h3 class="title">Paiement</h3>

                <div class="input-Box">
                    <label>Cartes acceptées :</label>
                    <img src="/e-boutique/img/card_img.png" alt="">
                </div>
                <div class="input-Box">
                    <label>Nom sur la carte :</label>
                    <input type="text" name="nom_carte" placeholder="NOM " required />
                </div>
                <div class="input-Box">
                    <label>Numéro de carte de crédit :</label>
                    <input type="number" name="numero_carte" placeholder="55XX XXXX XXXX 3241" required />
                </div>
                <div class="input-Box">
                    <label>Mois d'expiration :</label>
                    <input type="number" name="mois_expiration" placeholder="10" required />
                </div>

                <div class="flex">
                    <div class="input-Box">
                        <label>Année d'expiration :</label>
                        <input type="number" name="annee_expiration" placeholder="2027" required />
                    </div>
                    <div class="input-Box">
                        <label>CVV :</label>
                        <input type="text"  name="cvv" placeholder="123" required />
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="PAYER " class="submit-btn">

    </form>
</div>    
</body>
</html>