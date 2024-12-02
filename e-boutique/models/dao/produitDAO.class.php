<?php

include("connexionBD.class.php");
include("dao.interface.php");


class ClientDAO implements DAO {
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

        $statement = $connexion->prepare("SELECT * FROM produit WHERE idCategorie= $chercherParCategorie");
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

        $statement = $connexion->prepare("SELECT * FROM produit WHERE idCategorie= $chercherParCategorie");
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

        $statement = $connexion->prepare("DELETE * FROM client INNER JOIN administrateur ON client.id=administrateur.idClient");
        $statement->execute();

        $row = $statement->fetchAll();

        if($row == false){
            return [];
        }
        
        ConnexionBD::close();

        return $row;
    }

    public static function AjouterProduit(String $nom, float $prixUnitaire, int $quantite, string $urlPhoto): array {
        $connexion =  ConnexionBD::getInstance();

        $statement = $connexion->prepare("INSERT INTO Produit ( nom, prixUnitaire, quantite, urlPhoto) 
        VALUES
            ( $nom, $prixUnitaire, $quantite,$urlPhoto)");
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

    
}



?>