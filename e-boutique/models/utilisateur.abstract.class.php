<?php

// Classe abstraite utilisateur. Les classes Administrateur et Client hériterons d'elle.
abstract class Utilisateur {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $hashed_password;
    private string $date_creation;
    private string $date_modification;
    
    // Constructeur
    public function __construct(int $id, string $nom, string $prenom, string $email, string $hashed_password, 
    string $date_creation, string $date_modification)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->hashed_password = $hashed_password;
        $this->date_creation = $date_creation;
        $this->date_modification = $date_modification;
    }

    // Accesseurs (Get)
    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getEmail(){return $this->email;}
    public function getHashed_password(){return $this->hashed_password;}
    public function getDate_creation(){return $this->date_creation;}
    public function getDate_modification(){return $this->date_modification;}

    // Mutateurs (Set)
    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setEmail($email){$this->email = $email;}
    public function setHashed_password($hashed_password){$this->hashed_password = $hashed_password;}
    
    public function setDate_modification(){date_default_timezone_set("America/New_York"); $this->date_modification = date('Y-m-d G:i:s');}

    // Set password à hasher
    public function setPassword(string $target): void{$this->hashed_password = hash("sha256", $target);}
}
  