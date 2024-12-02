<?php
/**
 * Ce controleur Père vas initialiser et surtout contenir les informations de celui qui est actuelement connecté
 * 
 */
 abstract class Controleur {
    private string $userRole;
    public function __construct(){
        session_status() == PHP_SESSION_ACTIVE ? "" : session_start();
        $this->userRole = "visiteur";
         
        if(isset($_SESSION['utilisateurConnecte'])){
            $this->userRole = "client";
        }
        /**
         * 1- ouverture de lasession
         * 2- récupération de l'utilisateur
         * 3- remplissage de l'utilisateur
         */
    }

    public function getUtilisateur(): string {
        return $this->userRole;
    }

    public abstract function executerAction() :string;
}

?>