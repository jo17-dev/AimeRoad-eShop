<?php

include_once "models/dao/clientDAO.class.php";
include_once "models/administrateur.class.php";

class ModifierClient extends Controleur{
    private Administrateur $admin; // à date on utilise Admin car client ne fonctionne pas encore...
    public function __construct(){
        parent::__construct();
        session_status() == PHP_SESSION_ACTIVE ? "" : session_start();
        $row = $_SESSION['utilisateurConnecte'];

        $this->admin = new Administrateur($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['password']);
    }

    public function executerAction(): string {
        if(isset($_POST["nom"])){ // soumission de la modification du nom
            if(!is_null($_POST["nomConfirm"]) && $_POST["nom"] == $_POST["nomConfirm"]){
                $this->admin->setNom($_POST["nom"]);
        
                ClientDAO::miseAJour($this->admin->getId() , "nom = '".$this->admin->getNom()."' ");
                $_SESSION['utilisateurConnecte']['nom'] = $this->admin->getNom();
            }
        }else if(isset($_POST["prenom"])){
            if(!is_null($_POST["prenomConfirm"]) && $_POST["prenom"] == $_POST["prenomConfirm"]){
                $this->admin->setPrenom($_POST["prenom"]);
        
                ClientDAO::miseAJour($this->admin->getId() , "prenom = '".$this->admin->getPrenom()."' ");
                $_SESSION['utilisateurConnecte']['prenom'] = $this->admin->getPrenom();
            }
        }else if(isset($_POST["email"])){
            if(!is_null($_POST["emailConfirm"]) && $_POST["email"] == $_POST["emailConfirm"]){
                $this->admin->setEmail($_POST["email"]);
        
                ClientDAO::miseAJour($this->admin->getId() , "email = '".$this->admin->getEmail()."' ");
                $_SESSION['utilisateurConnecte']['email'] = $this->admin->getEmail();
            }
        }else if(isset($_POST["passwordOld"])){
            if(!is_null($_POST["passwordNewConfirm"]) && $_POST["passwordNew"] == $_POST["passwordNewConfirm"] && $this->admin->comparePassword($_POST["passwordOld"])){
                $this->admin->setPassword($_POST["passwordNew"]);
        
                ClientDAO::miseAJour($this->admin->getId() , "password = '".$this->admin->getHashedPassword()."' ");
                $_SESSION['utilisateurConnecte']['password'] = $this->admin->getHashedPassword();
            }
        }

        return "compte_client";
    }

    public function getAdministrateur(): Administrateur{
        return $this->admin;
    }

}

?>