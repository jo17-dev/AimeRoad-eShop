<?php
class PaiementDAO {
    private $connexion;

    public function __construct() {
        try {
            $this->connexion = ConnexionBD::getInstance();
           
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function enregistrerPaiement($data) {
        try {
            $requete = $this->connexion->prepare("
                INSERT INTO paiements (nom_complet, email, adresse, ville, province, code_postal, nom_carte, numero_carte, mois_expiration, annee_expiration, cvv)
                VALUES (:nom_complet, :email, :adresse, :ville, :province, :code_postal, :nom_carte, :numero_carte, :mois_expiration, :annee_expiration, :cvv)
            ");
            $requete->execute($data);
        } catch (PDOException $e) {
            die("Erreur lors de l'enregistrement du paiement : " . $e->getMessage());
        }
    }
}
?>