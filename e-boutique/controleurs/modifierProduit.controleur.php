<?php
//include_once "models/dao/clientDAO.class.php";
include_once "models/produit.class.php";

class ModifierProduit extends Controleur{
    	// ******************* Attributs
	private $tabProduits;

	// ******************* Constructeur vide
	public function __construct()
	{
		parent::__construct();
		$this->tabProduits = array();
	}

	// ******************* Accesseurs
	public function getTabProduits():array
	{
		return $this->tabProduits;
	}

	// ******************* Méthode exécuter action
	public function executerAction():string
	{
		// Vérifier si une session est déjà démarrée avant d'appeler session_start()
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
	
		if (isset($_SESSION['code'])) {
			$unCode = $_SESSION['code'];
			$unProduit = ProduitDAO::chercher($unCode);
	
			if (isset($_REQUEST["description"])) {
				$description = $_POST["description"];
				$marque = $_POST["marque"];
				$prix = $_POST["prix"];
				$quantite = $_POST["quantite"];
	
				$unProduit->setDescription($description);
				$unProduit->setMarque($marque);
				$unProduit->setPrix($prix);
				$unProduit->ajouterAuStock($quantite);
	
				// Modifier le produit dans la base de données
				ProduitDAO::modifier($unProduit);
			}
		}
	
		if (isset($_REQUEST["annuler"])) {
			$this->tabProduits = ProduitDAO::chercherTous();
			return "pageAdministration";
		}
	
		$this->tabProduits = ProduitDAO::chercherTous();
		return "pageVoirProduits";

}
}