<?php
class Client extends Utilisateur {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $hashed_password;

    // Constructeur
    public function __construct(int $id, string $nom, string $prenom, string $email, string $hashed_password, string $date_creation, string $date_modification)
    {
        parent::__construct($id, $nom, $prenom, $email, $hashed_password, $date_creation, $date_modification);
    }

    // Fonctions spécifiques à utilisateur

}
?>