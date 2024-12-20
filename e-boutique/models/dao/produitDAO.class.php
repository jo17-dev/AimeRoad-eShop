<?php
 
include_once("connexionBD.class.php");
include_once("dao.interface.php");
include_once("models/produit.class.php");
 
 
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
 
    public static function chercherParNom(string $chercherParNom): array {
        $connexion =  ConnexionBD::getInstance();

        $sanitizedNom = htmlspecialchars($chercherParNom);
 
        $statement = $connexion->prepare("SELECT * FROM produit WHERE nom='$sanitizedNom'");
        $statement->execute();
 
        $row = $statement->fetchAll();
 
        if($row == false){
            return [];
        }
       
        ConnexionBD::close();
 
        return $row;
    }
 
 
 
    public static function SupprimerProduit(int $SupprimerProduit): bool {
        $connexion =  ConnexionBD::getInstance();
 
        $statement = $connexion->query("DELETE FROM panier WHERE idProduit=$SupprimerProduit");
        $statement = $connexion->query("DELETE FROM produit WHERE id=$SupprimerProduit");
       
        ConnexionBD::close();
        if($statement == false){
            return false;
        }
 
        return true;
    }
 
    public static function AjouterProduit(String $nom, int $idCategorie, float $prixUnitaire, int $quantite, string $urlPhoto): array {
        $connexion =  ConnexionBD::getInstance();

        $sanitizedNom = htmlspecialchars($nom);
        $sanitizedUrlPhoto = htmlspecialchars($urlPhoto);
 
        $statement = $connexion->prepare("INSERT INTO produit (idCategorie, nom, prixUnitaire, quantite, urlPhoto)
        VALUES
            ( $idCategorie, '$sanitizedNom', $prixUnitaire, $quantite, '$sanitizedUrlPhoto')");
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
        $commande = $connexion->query("SELECT produit.id, produit.nom, produit.urlPhoto ,categorie.nom 'categorie', prixUnitaire, quantite
                                         FROM produit INNER JOIN categorie ON produit.idCategorie = categorie.id ORDER BY produit.date_modification DESC");
 
        $rows = $commande->fetchAll();

        $result = [];

        foreach($rows as $valeur){
            array_push($result, new Produit($valeur['id'], $valeur['categorie'], $valeur['nom'], $valeur['prixUnitaire'], $valeur['quantite'], $valeur['urlPhoto']));
        }

        return $result;

    }

}
 
?>