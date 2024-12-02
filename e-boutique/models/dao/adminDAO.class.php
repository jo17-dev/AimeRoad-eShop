<?php

class AdminDAO extends ClientDAO{
    public function __construct(){
        parent::__construct();
    }

    public static function ajouter(int $id) : bool{
            try { 
                $connexion=ConnexionBD::getInstance();   
            } catch (Exception $e) {
                return false;
            }
            $commande = $connexion->query("INSERT INTO administrateur (idClient) VALUES($id)");
    
            $rows = $commande->fetchAll();
    
            ConnexionBD::close();
    
            return true;
    }

    public static function supprimer(int $id) : bool{
        try { 
            $connexion=ConnexionBD::getInstance();   
        } catch (Exception $e) {
            return false;
        }
        $commande = $connexion->query("SELECT * FROM administrateur WHERE idClient = $id");

        $rows = $commande->fetchAll();
        if(count($rows) != 0){ // On ne supprime les droits d'admin que s'il existe déjas
            $commande = $connexion->exec("DELETE FROM administrateur WHERE idClient=$id");
            ConnexionBD::close();
            return true;
        }
        ConnexionBD::close();
        return false;
}
}

?>