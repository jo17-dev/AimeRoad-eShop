<?php
class Categorie {
    private int $id;
    private String $nom;

    public function __construct(int $id, String $nom){
        $this->id =$id;
        $this->nom = $nom;
    }

    public function getId(): int{
        return $this->id;
    }

    
    public function getNom(): String{
        return $this->nom;
    }

}

?>