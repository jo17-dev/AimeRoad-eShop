<?php
include_once "models/dao/produitDAO.class.php";


class SupprimerProduit extends Controleur{
    public function __construct(){
        parent::__construct();
    }
    public  function executerAction() :string{

      if(isset($_GET["idproduit"])){
        ProduitDAO::SupprimerProduit((int)($_GET["idproduit"]));
      }

        return "listeproduits_admin";
    }
}
?>