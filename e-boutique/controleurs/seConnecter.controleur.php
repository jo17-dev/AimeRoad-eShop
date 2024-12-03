<?php
    include_once "models/dao/clientDAO.class.php";
    include_once "models/client.class.php";

    class SeConnecter extends Controleur {
        function __construct()
        {
            parent::__construct();
        }

        function executerAction(): string
        {
            if (isset($_POST['adresse']) and isset($_POST['motDePasse'])) {
                $unClient = ClientDAO::chercherParEmail($_POST['adresse']);
                $unMotDePasse = hash("sha256", $_POST['motDePasse']);
                // Si l'utilisateur existe et le mot de passe existent et qu'ils appartiennent au même utilisateur, se connecte
                if ($unClient['password'] == $unMotDePasse) {
                    if ((isset($_POST["seSouvenir"]) && $_POST["seSouvenir"] != null)) {
                        // Cookie se souvenir
                        setcookie('utilisateur', $_POST['adresse'], time() + (60 * 30)); // Durée du cookie : le temps courant + 30 minutes
                    }
                    if (ClientDAO::estAdmin($unClient['id'])) {
                        $unClient['estAdmin']=true;
                    } else {
                        $unClient['estAdmin']=false;
                    }
                    $_SESSION['utilisateurConnecte'] = $unClient;

                    return $unClient['estAdmin']? "compte_admin": "compte_client";
                } else {
                    return "connexion";
                }
            } else {
                return "connexion";
            }
            
        }  
    }
?>


