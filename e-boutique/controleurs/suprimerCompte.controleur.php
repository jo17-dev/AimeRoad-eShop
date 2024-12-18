<?php
include_once "controleur.abstract.class.php";
include_once "models/dao/clientDAO.class.php";
include_once "models/dao/adminDAO.class.php";

class SuprimerCompte extends Controleur {
    private array $listeClients;
    public function __construct(){
        parent::__construct();
    }

    public function executerAction(): string {
        if(parent::getUtilisateur() == "admin"){
            if(isset($_GET['idClient'])){
                // Pour supprimer un client, on suprime aussi tout ce qui a trait à lui dans les autres table pour eviter les contraints violation haha
                AdminDAO::supprimer((int ) $_GET['idClient']);
                $result = ClientDAO::supprimer( (int) $_GET['idClient']);
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