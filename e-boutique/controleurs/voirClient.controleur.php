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
                $d = $_SESSION['utilisateurConnecte'];
                print_r($d['estAdmin']);
                return "compte_client";
            } else {
                return "connexion";
            }
        }
    }
?>