<?php
// cette classe est de test.

 class Administrateur {
    // Propriétés de la classe
    private int $id;
    private string $idCategorie;
    private string $nom;
    private float $prixUnitaire;
    private int $quantite;
    private string $urlPhoto;

    // Constructeur avec tous les paramètres
    public function __construct(int $id, string $idCategorie,string $nom, float $prixUnitaire,int $quantite, string $urlPhoto) {
        $this->id = $id;
        $this->idCategorie = $idCategorie;
        $this->nom = $nom;
        $this->prixUnitaire = $prixUnitaire;
        $this->quantite = $quantite;
        $this->urlPhoto = $urlPhoto;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getIdCategorie(): string {
        return $this->idCategorie;
    }

    
    public function getNom(): string {
        return $this->nom;
    }


    public function getPrixUnitaire(): float {
        return $this->prixUnitaire;
    }

    public function getQuantite(): int {
        return $this->quantite;
    }

    public function getUrlPhoto(): string {
        return $this->urlPhoto;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }


    public function setIdCategorie(string $idCategorie): void {
        $this->idCategorie = $idCategorie;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setPrixUnitaire(string $prixUnitaire): void {
        $this->prixUnitaire = $prixUnitaire;
    }

    public function setQuantite(string $quantite): void {
        $this->quantite = $quantite;
    }

    public function setUrlPhoto(string $urlPhoto): void {
        $this->urlPhoto = $urlPhoto;
    }    
}

?>