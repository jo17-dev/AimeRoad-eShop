<?php

include_once "controleur.abstract.class.php";
include_once "voirAcceuil.controleur.php";
include_once "voirAdmin.controleur.php";
include_once "modifierAdmin.controleur.php";
include_once "controleurListeproduitsAdmin.class.php";
include_once "controleurHistoriqueComandes.class.php";

class ControleurManifacture {
    /**
     * Dans cette methode, on fait les traintements par le controleur et on renvoie la vue à charger
     */
    public static function creerControleur(string $action): Controleur {
        if($action == "voirAdmin"){
            
            return new VoirAdmin();
        }elseif ($action ==="modifierAdmin"){
            return new ModifierAdmin();
        }elseif($action == "listeProduitsAdmin"){
            return new ControleurListeProduitAdmin();
        }elseif($action == "historiqueCommandesAdmin"){
            return new ControleurHistoriqueCommandes();
        }elseif($action == ""){
            // return 
        }elseif($action == ""){
                
        }
        
        
        elseif($action == ""){
            return new VoirAcceuil();
        }
    }
}
?>