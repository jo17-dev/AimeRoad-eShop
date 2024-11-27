<?php
// cette classe est de test. elle vas être à modifier tout à l'heure

 class Administrateur {
    // Propriétés de la classe
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $hashed_password;

    // Constructeur avec tous les paramètres
    public function __construct(int $id, string $nom, string $prenom, string $email, string $hashed_password) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->hashed_password = $hashed_password;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getHashedPassword(): string {
        return $this->hashed_password;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setHashedPassword(string $hashed_password): void {
        $this->hashed_password = $hashed_password;
    }

    public function setPassword(string $target): void{
        $this->hashed_password = hash("sha256", $target);
    }

    public function comparePassword(string $target): bool {
        if(hash("sha256", $target) == $this->hashed_password){
            return true;
        }
        return false;
    }

    
}

?>