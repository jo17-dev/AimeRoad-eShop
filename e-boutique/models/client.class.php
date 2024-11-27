<?php
class Client extends Utilisateur {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $hashed_password;
    private $date_creation;
    private $date_modification;

    // Constructeur
    public function __construct($id, $nom, $prenom, $email, $hashed_password, $date_creation, $date_modification) 
    {
        parent::__construct($id, $nom, $prenom, $email, $hashed_password, $date_creation, $date_modification);
    }

    // Fonctions spécifiques à utilisateur

}
?>