<?php
include_once "models/dao/produitDAO.class.php";


class SupprimerProduit extends Controleur{
    public function __construct(){
        parent::__construct();
    }
    public  function executerAction() :string{

      if(isset($_GET["idproduit"])){
// ici, on suprimme l'image dans la DB et dans les dossiers
        try{
          $produit_url_photo = ProduitDAO::chercherParId((int) $_GET['idproduit'])['urlPhoto'];
          unlink($produit_url_photo);

        }catch(Exception $e){

        }finally{
          ProduitDAO::SupprimerProduit((int)($_GET["idproduit"]));
        }

        
      }

        return "listeproduits_admin";
    }
}
?>