<?php
    include_once "models/dao/clientDAO.class.php";
    include_once "models/client.class.php";

    class SeDeconnecter extends Controleur {

        function __construct()
        {
            parent::__construct();
        }
        

        function executerAction(): string
        {
            session_destroy();
            return "index";
        }

    }
?>