<?php
include '../dao/PaiementDAO.php';

class PaiementControleur {
    private $paiementDAO;

    public function __construct() {
        $this->paiementDAO = new PaiementDAO();
    }

    public function traiterPaiement($nomComplet, $email, $adresse, $ville, $province, $codePostal, $nomCarte, $numeroCarte, $moisExpiration, $anneeExpiration, $cvv) {
        // Préparer les données pour le DAO
        $data = [
            'nom_complet' => $nomComplet,
            'email' => $email,
            'adresse' => $adresse,
            'ville' => $ville,
            'province' => $province,
            'code_postal' => $codePostal,
            'nom_carte' => $nomCarte,
            'numero_carte' => $numeroCarte,
            'mois_expiration' => $moisExpiration,
            'annee_expiration' => $anneeExpiration,
            'cvv' => $cvv
        ];

        // Enregistrer le paiement
        $this->paiementDAO->enregistrerPaiement($data);
    }
}
?>
