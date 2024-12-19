<?php
include_once("connexionBD.class.php");

class PanierDAO implements DAO {
    public static function chercher(mixed $cles): ?object{
        return null;
    }
    private $connexion;
    
    public function getProduits(int $id): array{
        $this->connexion = ConnexionBD::getInstance();
        try {
            $requete = $this->connexion->prepare("
                SELECT panier.quantite, produit.nom, produit.prixUnitaire
                FROM panier
                INNER JOIN produit ON panier.idProduit = produit.id AND panier.idClient = $id
            ");
            $requete->execute();

            $result = $requete->fetchAll();
            if($result == null){
                return [];
            }else{
                return $result;
            }
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des produits : " . $e->getMessage());
        }
    }

    public function ajouterProduit($produitId, $quantite) {
        try {
            $requete = $this->connexion->prepare("
                INSERT INTO panier (produit_id, quantite)
                VALUES (:produit_id, :quantite)
                ON DUPLICATE KEY UPDATE quantite = quantite + :quantite
            ");
            $requete->execute([
                'produit_id' => $produitId,
                'quantite' => $quantite
            ]);
        } catch (PDOException $e) {
            die("Erreur lors de l'ajout du produit au panier : " . $e->getMessage());
        }
    }

    
    public function modifierQuantite($produitId, $quantite) {
        try {
            $requete = $this->connexion->prepare("
                UPDATE panier
                SET quantite = :quantite
                WHERE produit_id = :produit_id
            ");
            $requete->execute([
                'produit_id' => $produitId,
                'quantite' => $quantite
            ]);
        } catch (PDOException $e) {
            die("Erreur lors de la modification de la quantité : " . $e->getMessage());
        }
    }

   
    public function supprimerProduit($produitId) {
        try {
            $requete = $this->connexion->prepare("
                DELETE FROM panier
                WHERE produit_id = :produit_id
            ");
            $requete->execute(['produit_id' => $produitId]);
        } catch (PDOException $e) {
            die("Erreur lors de la suppression du produit : " . $e->getMessage());
        }
    }


    public function viderPanier() {
        try {
            $requete = $this->connexion->prepare("DELETE FROM panier");
            $requete->execute();
        } catch (PDOException $e) {
            die("Erreur lors de la suppression du panier : " . $e->getMessage());
        }
    }
}
?>
