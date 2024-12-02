<?php
include_once "controleur.abstract.class.php";
include_once "models/dao/clientDAO.class.php";
include_once "models/dao/adminDAO.class.php";

class AjouterDroitsAdmin extends Controleur {
    private array $listeClients;
    public function __construct(){
        parent::__construct();
    }

    public function executerAction(): string {
        if(parent::getUtilisateur() == "admin"){
            if(isset($_GET['idClient'])){
                AdminDAO::ajouter( (int) $_GET['idClient']);
                
            }else{
                // erreur de traitement ahahaha
            }
            return "liste_clients_admin";
        }else{
            return "connexion";
        }
    }

    public function getListeClients(): array {
        $result = ClientDAO::chercherTous();

        if(count($result) != 0){
            return $result;
        }
        return [];
    }
}

?>