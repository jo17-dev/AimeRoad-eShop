<?php

    class VoirConnexion extends Controleur {

        public function __construct()
        {
            parent::__construct();
        }
        public function executerAction(): string {
            if($_SESSION['loginFailure']) {
                session_destroy();
            }
            if(parent::getUtilisateur() == "client") {
                return "compte_client";
            } elseif(parent::getUtilisateur() != "visiteur") {
                return "compte_admin";
            } else {
                return "connexion";
            }
    }

}   
?>