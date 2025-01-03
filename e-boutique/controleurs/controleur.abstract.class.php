<?php
/**
 * Ce controleur Père vas initialiser et surtout contenir les informations de celui qui est actuelement connecté
 * 
 */
 abstract class Controleur {
    private string $userRole;
    private static array $messagesErreur = [];
    public function __construct(){
        session_status() == PHP_SESSION_ACTIVE ? "" : session_start();
        $this->userRole = "visiteur";
         
        if(isset($_SESSION['utilisateurConnecte'])){
            $this->userRole = "client";
            if($_SESSION['utilisateurConnecte']['estAdmin'] == true){
                $this->userRole = "admin";
            }
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

    public static function ajouterMessageErreur(string $cible, bool $isError=true){
        array_push(Controleur::$messagesErreur, $cible);
    }

    public static function suprimerMessages(){
        Controleur::$messagesErreur = [];
    }

    public static function getMessagesErreur(): array{
        return Controleur::$messagesErreur;
    }

    public abstract function executerAction() :string;

}

?>