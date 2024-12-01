<?php
    include_once "models/dao/clientDAO.class.php";
    include_once "models/client.class.php";

    class VoirClient extends Controleur {
        function __construct()
        {
            parent::__construct();
        }

        function executerAction(): string
        {
            if(parent::getUtilisateur() != "visiteur") {
                return "compte_client";
            } else {
                return "connexion";
            }
        }
    }
?>