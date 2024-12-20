<?php
include_once "models/dao/produitDAO.class.php";
include_once "models/produit.class.php";

class VoirProduit extends Controleur{
  
		private $tabProduits;
		
	
		public function __construct() {
			parent::__construct();
			$this->tabProduits=ProduitDAO::chercherTous();
		}

		public function rechercher(){

		}
		
	
		public function getTabProduits():array{
			return $this->tabProduits;
		}


		public function executerAction():string {
			if(parent::getUtilisateur() != "admin"){

				if(isset($_POST["q"])){
					$this->tabProduits=ProduitDAO::chercherParNom($_POST["q"]);
				}
				
				return "listeproduits";
			}elseif(parent::getUtilisateur()=="admin"){
				return "listeproduits_admin";
			}
			 
		}

}