<?php
class Client extends Utilisateur {
    private $nom;
    private $prenom;
    private $email;
    private $hashed_password;

    public function __construct($nom, $prenom, $email, $hashed_password) {
        
    }
}
?>