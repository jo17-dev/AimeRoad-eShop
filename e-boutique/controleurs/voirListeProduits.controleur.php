<?php

class VoirListeProduits extends Controleur{
    private array $produits;
    public function __construct(){
        parent::__construct();
    }

    public function executerAction(): string {
        return "listeproduits";
    }
}

?>