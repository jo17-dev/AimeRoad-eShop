<?php
include "utilisateur.abstract.class.php";
class Client extends Utilisateur {

    // Constructeur
    public function __construct(int $id, string $nom, string $prenom, string $email, string $hashed_password, string $date_creation, string $date_modification)
    {
        parent::__construct($id, $nom, $prenom, $email, $hashed_password, $date_creation, $date_modification);
    }

    // Fonctions spécifiques à utilisateur

}
?>