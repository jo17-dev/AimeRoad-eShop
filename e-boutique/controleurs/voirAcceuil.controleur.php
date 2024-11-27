<?php

class VoirAcceuil extends Controleur{
    public function __construct(){
        parent::__construct();
    }

    public function executerAction():string {
        return "index";
    }


}

?>