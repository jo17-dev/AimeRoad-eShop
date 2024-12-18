<?php
include_once "models/dao/produitDAO.class.php";
include_once "models/produit.class.php";

class VoirProduit extends Controleur{
  
		private $tabProduits;
		
	
		public function __construct() {
			parent::__construct();
			$this->tabProduits=ProduitDAO::chercherTous();
		}
		
	
		public function getTabProduits():array{
			return $this->tabProduits;
		}


		public function executerAction():string {
			if(parent::getUtilisateur() != "admin"){
				return "listeproduits";
			}elseif(parent::getUtilisateur()=="admin"){
				return "listeproduits_admin";
			}
			 
		}

}