<?php
include '../dao/PanierDAO.php';

class PanierControleur {
    private $panierDAO;

    // Constructeur pour initialiser le DAO
    public function __construct() {
        $this->panierDAO = new PanierDAO();
    }

    // Récupérer les produits du panier
    public function getProduitsPanier() {
        return $this->panierDAO->getProduits();
    }

    // Ajouter un produit au panier
    public function ajouterProduit($produitId, $quantite) {
        if ($quantite > 0) {
            $this->panierDAO->ajouterProduit($produitId, $quantite);
        }
    }

    // Modifier la quantité d'un produit dans le panier
    public function modifierQuantite($produitId, $quantite) {
        if ($quantite > 0) {
            $this->panierDAO->modifierQuantite($produitId, $quantite);
        } else {
            // Supprime le produit si la quantité est 0
            $this->panierDAO->supprimerProduit($produitId);
        }
    }

    // Supprimer un produit du panier
    public function supprimerProduit($produitId) {
        $this->panierDAO->supprimerProduit($produitId);
    }

    // Vider complètement le panier
    public function viderPanier() {
        $this->panierDAO->viderPanier();
    }
}
?>
