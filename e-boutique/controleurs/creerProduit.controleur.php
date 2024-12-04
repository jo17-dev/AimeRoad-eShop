<?php

include_once "models/produit.class.php";
include_once "models/dao/produitDAO.class.php";

class CreerProduit extends Controleur{

	public function __construct()
	{
		parent::__construct();
	}

	public function executerAction():string
	{

		if (isset($_POST["prixUnitaire"])) {
			$nom = $_POST["nom"];
			$prixUnitaire = $_POST["prixUnitaire"];
			$quantite = $_POST["quantite"];
			$urlPhoto = $_POST["photo"];
			$idCategorie = (int) $_POST["categorie"];



			ProduitDAO::AjouterProduit($nom, $idCategorie ,$prixUnitaire, $quantite, $urlPhoto);

		}

		return "listeproduits_admin";
	}
}

?>