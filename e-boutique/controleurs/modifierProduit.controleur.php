<?php
//include_once "models/dao/clientDAO.class.php";
include_once "models/produit.class.php";

class ModifierProduit extends Controleur{

	public function __construct()
	{
		parent::__construct();

	}
	public function executerAction():string
	{
	
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
				// ProduitDAO::modifier($unProduit);

			}
		}
		return "listeproduits_admin";

}
}