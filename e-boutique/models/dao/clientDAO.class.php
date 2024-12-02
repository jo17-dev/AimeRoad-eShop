<?php

include("connexionBD.class.php");
include("dao.interface.php");


class ClientDAO implements DAO {
    public static function chercher(mixed $cles): ?object{
        return null;
    }

    public static function chercherParId(int $id): array {
        $connexion =  ConnexionBD::getInstance();

        $commande = $connexion->prepare("SELECT * FROM client INNER JOIN administrateur ON client.id=administrateur.idClient");
        $commande->execute();

        $row = $commande->fetchAll();

        if($row == false){
            return [];
        }
        
        ConnexionBD::close();

        return $row;
    }

    public static function inserer(string $nom, string $prenom, string $email, string $password) {
        try { 
        $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) { 
        throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }

        $connexion->exec("INSERT INTO Client (nom, prenom, email, password) VALUES('$nom', '$prenom', '$email', '$password')");
        ConnexionBD::close();
    }

    public static function miseAJour(int $id, string $changements): bool{
        $connexion =  ConnexionBD::getInstance();

        $result = $connexion->exec("UPDATE client SET " .$changements . " WHERE id=$id");

        ConnexionBD::close();

        return $result;
    }

    public static function chercherParEmail(string $email) {
        try { 
        $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) { 
        throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        $commande = $connexion->query("SELECT * FROM client WHERE email LIKE '$email'");

        $row = $commande->fetch();
        
        ConnexionBD::close();

        return $row;

    }

    public static function estAdmin(int $id) : bool {
        try { 
            $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) { 
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        $commande = $connexion->query("SELECT * FROM administrateur WHERE idClient = '$id'");

        $row = $commande->fetch();

        ConnexionBD::close();
        
        if(isset($row['idClient'])) {
            return true;
        } else {
            return false;
        }
    }
    
    public static function chercherIDnonUtilisé() : int {
        try { 
            $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) { 
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        $commande = $connexion->query("SELECT MAX(id) FROM client");

        $row = $commande->fetch();

        ConnexionBD::close();

        return $row[0] + 1;
    }

    public static function chercherTous(): array{
        try { 
            $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) { 
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        $commande = $connexion->query("SELECT * FROM client LEFT JOIN administrateur ON client.id = administrateur.idClient");

        $rows = $commande->fetchAll();

        ConnexionBD::close();

        return $rows;
    }

    public static function supprimer(int $id) : bool{
        try { 
            $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) {
            return false;
        }
        $commande = $connexion->query("SELECT * FROM client WHERE id = $id");

        $rows = $commande->fetchAll();
        if(count($rows) != 0){ // On ne supprime les droits d'admin que s'il existe déjas
            $commande = $connexion->exec("DELETE FROM client WHERE id=$id");
            ConnexionBD::close();
            return true;
        }
        ConnexionBD::close();
        return false;
}
}

?>