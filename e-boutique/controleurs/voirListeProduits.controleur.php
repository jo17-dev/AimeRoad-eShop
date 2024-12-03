<?php
include_once "models/dao/produitDAO.class.php";
include_once "models/produit.class.php";

class VoirProduit extends Controleur{
    // ******************* Attributs
		private $tabProduits;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabProduits=ProduitDAO::chercherTous();
		}
		
		// ******************* Accesseurs
		public function getTabProduits():array{
			return $this->tabProduits;
		}

		// ******************* Méthode exécuter action
		public function executerAction():string {
			if(parent::getUtilisateur() == "visiteur"){
				return "connexion";
			}else{
				print_r($this->tabProduits); return "pageListeProduits";
			}
			 
		}

}