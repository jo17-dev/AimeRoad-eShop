<?php
class Client extends Utilisateur {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $hashed_password;

    // Constructeur
    public function __construct(int $id, string $nom, string $prenom, string $email, string $hashed_password)
    {
        parent::__construct($id, $nom, $prenom, $email, $hashed_password);
    }

    // Fonctions spécifiques à utilisateur

}
?>