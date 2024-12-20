<?php

include_once "controleur.abstract.class.php";
include_once "voirAcceuil.controleur.php";
include_once "voirAdmin.controleur.php";
include_once "modifierAdmin.controleur.php";
include_once "controleurListeproduitsAdmin.class.php";
include_once "controleurHistoriqueComandes.class.php";
include_once "seConnecter.controleur.php";
include_once "seDeconnecter.controleur.php";
include_once "voirClient.controleur.php";
include_once "voirConnexion.controleur.php";
include_once "seInscrire.controleur.php";
include_once "voirInscription.controleur.php";
include_once "voirListeClient.controleur.php";
include_once "ajouterDroitsAdmin.controleur.php";
include_once "suprimerDroitsAdmin.controleur.php";
include_once "suprimerCompte.controleur.php";
include_once "modifierClient.controleur.php";
include_once "voirListeProduits.controleur.php";
include_once "voirAjouterProduit.controleur.php";
include_once "creerProduit.controleur.php";
include_once "supprimerProduit.controleur.php";
include_once "PanierControleur.php";
include_once "PaiementControleur.php";

include_once "voirListeProduits.controleur.php";

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
        }elseif($action == "voirListeClients"){
            return new VoirListeClient();
        }elseif($action == "ajouterDroitsAdmin"){
            return new AjouterDroitsAdmin();
        }elseif($action == "surprimerDroitsAdmin"){
            return new SupprimerDroitsAdmin();
        }elseif($action == "suprimerCompte"){
            return new SuprimerCompte();
        }
        elseif($action == ""){
            return new VoirAcceuil();
        }elseif($action == "seConnecter") {
            return new SeConnecter();
        }elseif($action == "seDeconnecter") {
            return new SeDeconnecter();
        }elseif($action == "voirClient") {
            return new VoirClient();
        }elseif($action == "voirConnexion") {
            return new VoirConnexion();
        }elseif($action == "seInscrire") {
            return new SeInscrire();
        }elseif($action == "voirInscription") {
            return new VoirInscription();
        }elseif($action == "voirAcceuil") {
            return new VoirAcceuil();
        }elseif($action == "modifierClient"){
            return new ModifierClient();
        }elseif($action == "voirListeProduits") {
            return new VoirProduit();
        }elseif($action == "voirAjouterProduit"){
            return new VoirAjouterProduit();
        }elseif($action == "creerProduit"){
            return new CreerProduit();
        }elseif($action == "suprimerProduit"){
            return new SupprimerProduit();
        }else if($action == "ajouterPanier"){
            return new PanierControleur();
        }else if($action == "pagePaiement"){
            return new PaiementControleur();
        }
        else{
            return new VoirAcceuil();
        }
    }
}
    
?>