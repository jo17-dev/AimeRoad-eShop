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

    public static function inserer(Client $unClient) {
        try { 
        $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) { 
        throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        $commande = $connexion->prepare("INSERT INTO client (id, nom, prenom, email, password, date_creation, date_modification) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");
        $tab = array(
            $unClient->getId(),
            $unClient->getNom(),
            $unClient->getPrenom(),
            $unClient->getEmail(),
            $unClient->getHashed_password(),
            $unClient->getDate_creation(),
            $unClient->getDate_modification()
        );
        ConnexionBD::close();
        return $commande->execute($tab);

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
}

?>