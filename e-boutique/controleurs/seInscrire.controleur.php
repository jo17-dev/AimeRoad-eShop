<?php
    include_once "models/dao/clientDAO.class.php";
    include_once "models/client.class.php";

    class seInscrire extends Controleur {
        function __construct()
        {
            parent::__construct();
        }

        function executerAction(): string
        {
            if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse']) and isset($_POST['mdp'])) {
                if(!empty(ClientDAO::chercherParEmail($_POST['adresse'])['email']) or (strlen($_POST['mdp']) < 5)) {
                    session_start();
                    $_SESSION['signupFailure'] = true;
                    return "inscription";
                } else {
                    error_reporting(E_ALL ^ E_DEPRECATED);
                    $hash_password = hash("sha256", $_POST['mdp']);
                    date_default_timezone_set("America/New_York");
                    
                    ClientDAO::inserer($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $hash_password);

                    $unClient = ClientDAO::chercherParEmail($_POST['adresse']);
                    $unClient['estAdmin']=false;

                    $unClient['estAdmin']=false;

                    $_SESSION['utilisateurConnecte'] = $unClient;

                    

                    return "compte_client";
                }
            }
        }
    }

?>