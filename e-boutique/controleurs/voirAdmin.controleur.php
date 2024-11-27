<?php

include_once "models/dao/clientDAO.class.php";
include_once "models/administrateur.class.php";

class VoirAdmin extends Controleur{
    private Administrateur $admin;
    public function __construct(){
        parent::__construct();
        
        session_status() == PHP_SESSION_ACTIVE ? "" : session_start();
        
        //TODO: enlever ce block
        $row = ClientDAO::chercherParId(2)[0];
        $this->admin = new Administrateur($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['password']);

        // fin du bloc à enlever

        // TODO bloc à décommenter
        // if(isset($_SESSION['user']['estAdmin'])){
            // $this->utilisateur = new Administrateur($_SESSION['user']['id'], $_SESSION['user']['nom'], $_SESSION['user']['prenom'], $_SESSION['user']['email'], $_SESSION['user']['hashed_password']);
        // }else if(isset($_SESSION['user']['estAdmin'])){
        //     return "compte_client";
        // }
    }

    public function executerAction(): string {

        return "compte_admin";
    }

    public function getAdministrateur(): Administrateur{
        return $this->admin;
    }

}

?>