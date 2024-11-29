<?php
/**
 * Ce controleur Père vas initialiser et surtout contenir les informations de celui qui est actuelement connecté
 * 
 */
 abstract class Controleur {
    private string $userRole;
    public function __construct(){
        session_status() == PHP_SESSION_ACTIVE ? "" : session_start();
        $userRole = "visiteur";
         
        if(isset($_SESSION['user'])){
            $userRole = "client";
        }
        /**
         * 1- ouverture de lasession
         * 2- récupération de l'utilisateur
         * 3- remplissage de l'utilisateur
         */
    }

    public function getUtilisateur(): string {
        return $this->utilisateur;
    }

    public abstract function executerAction() :string;
}

?>