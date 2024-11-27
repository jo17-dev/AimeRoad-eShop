<?php

// Classe abstraite utilisateur. Les classes Administrateur et Client hériterons d'elle.
abstract class Utilisateur {
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
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->$hashed_password = $hashed_password;
        $this->$date_creation = $date_creation;
        $this->$date_modification = $date_modification;
    }

    // Accesseurs (Get)
    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getEmail(){return $this->email;}
    public function getHashed_password(){return $this->hashed_password;}
    public function getDate_modification(){return $this->date_modification;}
    public function getDate_creation(){return $this->date_creation;}

    // Mutateurs (Set)
    public function setNom($nom){$this->nom = $nom; return $this;}
    public function setPrenom($prenom){$this->prenom = $prenom; return $this;}
    public function setEmail($email){$this->email = $email; return $this;}
    public function setHashed_password($hashed_password){$this->hashed_password = $hashed_password; return $this;}
}
  