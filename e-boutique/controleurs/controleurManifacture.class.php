<?php

include_once "controleur.abstract.class.php";
include_once "voirAcceuil.controleur.php";
include_once "voirAdmin.controleur.php";
include_once "modifierAdmin.controleur.php";
include_once "seConnecter.controleur.php";
include_once "seDeconnecter.controleur.php";
include_once "voirClient.controleur.php";
include_once "voirConnexion.controleur.php";

class ControleurManifacture {
    /**
     * Dans cette methode, on fait les traintements par le controleur et on renvoie la vue à charger
     */
    public static function creerControleur(string $action): Controleur {
        if($action == "voirAdmin"){
            
            return new VoirAdmin();
        }elseif ($action ==="modifierAdmin"){
            return new ModifierAdmin();
        }elseif($action == ""){
            return new VoirAcceuil();
        }elseif($action == "seConnecter") {
            return new SeConnecter();
        }elseif($action == "seDeconnecter") {
            return new SeDeconnecter();
        }elseif($action == "voirClient") {
            return new VoirClient();
        }elseif($action == "voirConnexion") {
            return new voirConnexion();
        }
    }
}















            // ici, on vas faire toutes les validations avant de faire l'action
            // if(isset($_POST["nom"])){ // soumission de la modification du nom
            //     if(!is_null($_POST["nomConfirm"]) && $_POST["nom"] == $_POST["nomConfirm"]){
            // }
            // }else if(isset($_POST["prenom"])){
            //     if(!is_null($_POST["prenomConfirm"]) && $_POST["prenom"] == $_POST["prenomConfirm"]){
                
            //     $ctlAdmin->update("prenom", $_POST["prenom"]);
            // }
            // }else if(isset($_POST["email"])){
            //     if(!is_null($_POST["emailConfirm"]) && $_POST["email"] == $_POST["emailConfirm"]){
                
            //     $ctlAdmin->update("email", $_POST["email"]);
            // }
            // }else if(isset($_POST["passwordOld"])){
            //     if(!is_null($_POST["passwordNewConfirm"]) && $_POST["passwordNew"] == $_POST["passwordNewConfirm"] && $user->comparePassword($_POST["passwordOld"])){
                
            //     $ctlAdmin->update("password", hash("sha256", $_POST["passwordNew"]));
            //     }
            // }


?>