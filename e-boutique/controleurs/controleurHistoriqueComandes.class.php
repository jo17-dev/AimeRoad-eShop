<?php

include_once "controleur.abstract.class.php";

class ControleurHistoriqueCommandes extends Controleur {
    public function __contruct(){
        parent::__contruct();

    }


    public function executerAction(): string {
        return "liste_commandes_admin";
    }
}

?>