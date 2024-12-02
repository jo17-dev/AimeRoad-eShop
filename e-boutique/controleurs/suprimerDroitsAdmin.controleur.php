<?php
include_once "controleur.abstract.class.php";
include_once "models/dao/clientDAO.class.php";
include_once "models/dao/adminDAO.class.php";

class SupprimerDroitsAdmin extends Controleur {
    private array $listeClients;
    public function __construct(){
        parent::__construct();
    }

    public function executerAction(): string {
        if(parent::getUtilisateur() == "admin"){
            if(isset($_GET['idClient'])){
                $result = AdminDAO::supprimer( (int) $_GET['idClient']);
                if(!$result){
                    // l'operation a échoué
                }
            }else{
                // erreur de traitement ahahaha
            }
            return "liste_clients_admin";
        }else{
            return "connexion";
        }
    }
}

?>