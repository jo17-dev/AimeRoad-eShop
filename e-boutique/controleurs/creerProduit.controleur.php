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
			$urlPhoto = "img/produits/";
			$idCategorie = (int) $_POST["categorie"];

			if((int) $quantite < 0 || (double) $prixUnitaire < 0){
				Controleur::ajouterMessageErreur("La quantitée et le prix doivent être minimum 0");
			}

			// on check aussi si le fichier a été correctement uploadé
			if(!isset($_FILES['photo']) || $_FILES['photo']['error'] != UPLOAD_ERR_OK){
				Controleur::ajouterMessageErreur("La photo n'as pas pu etre bien telechargée");
			}

			if(count(ProduitDAO::rechercheExacte($nom)) > 0){
				Controleur::ajouterMessageErreur("Le produit exsiste déjas !");
			}


			// on verifie s'il ya des erreurs ou des messages
			if(count(Controleur::getMessagesErreur()) > 0){
				return "ajouter_produit_admin";
			}else{ // sinon on upload le fichier et on le déplace vers un produit, puis on crée produit			
				$urlPhoto = "img/produits/" . "produit_". time() . '.' . pathinfo($_FILES['photo']['full_path'], PATHINFO_EXTENSION);
				$result = ProduitDAO::AjouterProduit($nom, $idCategorie ,$prixUnitaire, $quantite, $urlPhoto);	
				move_uploaded_file($_FILES['photo']['tmp_name'], $urlPhoto);
			}


		}

		return "listeproduits_admin";
	}
}

?>