<?php
 
include("connexionBD.class.php");
include("dao.interface.php");
 
 
class ProduitDAO implements DAO {
    public static function chercher(mixed $cles): ?object{
        return null;
    }
 
    public static function chercherParId(int $id): array {
        $connexion =  ConnexionBD::getInstance();
 
        $statement = $connexion->prepare("SELECT * FROM produit WHERE id=$id");
 
        $statement->execute();
 
        $row = $statement->fetchAll();
 
        if($row == false){
            return [];
        }
       
        ConnexionBD::close();
 
        return $row;
    }
 
    public static function FiltrerParCategorie(String $chercherParCategorie): array {
        $connexion =  ConnexionBD::getInstance();
 
        $statement = $connexion->prepare("SELECT * FROM produit WHERE idCategorie=$chercherParCategorie");
        $statement->execute();
 
        $row = $statement->fetchAll();
 
        if($row == false){
            return [];
        }
       
        ConnexionBD::close();
 
        return $row;
    }
 
    public static function chercherParNom(int $chercherParNom): array {
        $connexion =  ConnexionBD::getInstance();
 
        $statement = $connexion->prepare("SELECT * FROM produit WHERE nom=$chercherParNom");
        $statement->execute();
 
        $row = $statement->fetchAll();
 
        if($row == false){
            return [];
        }
       
        ConnexionBD::close();
 
        return $row;
    }
 
 
 
    public static function SupprimerProduit(int $SupprimerProduit): array {
        $connexion =  ConnexionBD::getInstance();
 
        $statement = $connexion->prepare("DELETE * FROM produit WHERE id=$SupprimerProduit");
        $statement->execute();
 
        $row = $statement->fetchAll();
 
        if($row == false){
            return [];
        }
       
        ConnexionBD::close();
 
        return $row;
    }
 
    public static function AjouterProduit(String $idCategorie, String $nom, float $prixUnitaire, int $quantite, string $urlPhoto): array {
        $connexion =  ConnexionBD::getInstance();
 
        $statement = $connexion->prepare("INSERT INTO produit ( idCategorie, nom, prixUnitaire, quantite, urlPhoto)
        VALUES
            ( $idCategorie, $nom, $prixUnitaire, $quantite,$urlPhoto)");
        $statement->execute();
 
        $row = $statement->fetchAll();
 
        if($row == false){
            return [];
        }
       
        ConnexionBD::close();
 
        return $row;
    }
 
    public static function MiseAJour(int $id, string $changements): bool{
        $connexion =  ConnexionBD::getInstance();
 
        $result = $connexion->exec("UPDATE client SET " .$changements . " WHERE id=$id");
 
        ConnexionBD::close();
 
        return $result;
    }

    public static function chercherTous(): array{
        try {
            $connexion=ConnexionBD::getInstance();  
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        $commande = $connexion->query("SELECT * FROM produit");
 
        $rows = $commande->fetchAll();
 
        ConnexionBD::close();
 
        return $rows;
    }
   
}
 
 
 
?>