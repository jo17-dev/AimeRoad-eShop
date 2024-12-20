<?php

include_once "controleurs/PanierControleur.php";

$panierControleur = new PanierControleur();


$produitsPanier = $panierControleur->getProduitsPanier();


$total = 0;
foreach ($produitsPanier as $produit) {
    $total += $produit['prix'] * $produit['quantite'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/PagePanier.css">
 
</head>
<body>
 
    <!--Barre de navigation sur toutes les pages-->
<?php include_once("vues/includes/header.php"); ?>
 
 
<div class="container-wrapper">
  <div class="container">
    <table>
     <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Sous-total</th>
     </tr>
     <?php foreach ($produitsPanier as $produit): ?>
     
     <tr>
        <td>
            <div class="pro">
                <img src= "<?php echo htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
                <div>
                    <p><?php echo htmlspecialchars($produit['nom']); ?></p>
                    <small>Prix: $<?php echo number_format($produit['prix'], 2); ?></small> </BR>
                    <a href="supprimer.php?id=<?php echo $produit['id']; ?>">RETIRER</a>
                </div>
             </div>
        </td>
        <td><input type="number" value = "<?php echo htmlspecialchars($produit['quantite']); ?>" min="1">></td>
        <td>$<?php echo number_format($produit['prix'] * $produit['quantite'], 2); ?></td>
     </tr>
     <?php endforeach; ?>
     </table>


    
 
    <div class="totale">
        <table>
            <tr>
                <td>Sous-total</td>
                <td>$<?php echo number_format($total, 2); ?></td>
            </tr>
            <tr>
                <td>Taxe (15%)</td>
                <td>$<?php echo number_format($total * 0.15, 2); ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$<?php echo number_format($total * 1.15, 2); ?></td>
            </tr>
        </table>

        
    </div>
    <a href="?action=pagePaiement" class="btn-payer-link">
        <button class="btn-payer">Payer</button>
    </a>
  </div>
  </div>
 
 
<!-- footer part -->

<?php include_once("vues/includes/footer.php"); ?>
 
</body>
</html>