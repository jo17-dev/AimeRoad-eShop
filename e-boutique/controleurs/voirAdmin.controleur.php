<?php

include_once "models/dao/clientDAO.class.php";
include_once "models/administrateur.class.php";

class VoirAdmin extends Controleur{
    private Administrateur $admin;
    private string $vue; // vas contenir la vue qui seras renvoyer àl'execution de l'ation
    public function __construct(){
        parent::__construct();
        
        session_status() == PHP_SESSION_ACTIVE ? "" : session_start();
        
        //TODO: enlever ce block
        // $row = ClientDAO::chercherParId(2)[0];
        // $this->admin = new Allllldministrateur($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['password']);

        // fin du bloc à enlever

        // TODO bloc à décommenter
        if(isset($_SESSION['utilisateurConnecte'])){
            if($_SESSION['utilisateurConnecte']['estAdmin'] == true){
                $this->vue = "compte_admin";
            }else if($_SESSION['utilisateurConnecte']['estAdmin'] == false){
                $this->vue = "compte_client";
            }
        }else{
            $this->vue = "index";
        }
    }

    public function executerAction(): string {
        return "compte_admin";
    }

}

?>