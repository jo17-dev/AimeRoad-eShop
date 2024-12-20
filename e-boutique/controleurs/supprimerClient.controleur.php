<?php
    include_once "models/dao/clientDAO.class.php";
    include_once "models/client.class.php";

    class SupprimerClient extends Controleur {
        public function __construct(){
            parent::__construct();
        }

        public function executerAction():string {
            ClientDAO::supprimer($_SESSION['utilisateurConnecte']['id']);
            session_destroy();
            return "index";
        }
    }


?>