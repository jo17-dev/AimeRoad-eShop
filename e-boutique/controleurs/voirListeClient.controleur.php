<?php
include_once "controleur.abstract.class.php";
include_once "models/dao/clientDAO.class.php";

class VoirListeClient extends Controleur {
    private array $listeClients;
    public function __construct(){
        parent::__construct();
    }

    public function executerAction(): string {
        if(parent::getUtilisateur() == "admin"){
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