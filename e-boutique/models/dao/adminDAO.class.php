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
}

?>