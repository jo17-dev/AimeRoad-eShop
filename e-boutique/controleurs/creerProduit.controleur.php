<?php
//include_once "models/dao/clientDAO.class.php";
include_once "models/produit.class.php";
include_once "models/dao/produitDAO.class.php";

class CreerProduit extends Controleur{
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

		if (isset($_REQUEST["code"])) {
			$code = $_POST["code"];
			$description = $_POST["description"];
			$marque = $_POST["marque"];
			$photo = $_POST["photo"];
			$prix = $_POST["prix"];
			$quantite = $_POST["quantite"];
			// $unProduit = new Produit($IdCategorie, $marque, $photo, $prix, $quantite);
			// ProduitDAO::AjouterProduit();
		}




		$this->tabProduits = ProduitDAO::chercherTous();
		return "pageVoirProduits";
	}
}
//include();
//class creerProduit extends Controleur{
  //  public function __construct(){
    //    parent::__construct();
    //}

    //public function executerAction():string {
      //  if (isset($_POSt["categorie"])){
        //    ProduitDAO:: AjouterProduit($nom,$prixUnitaire, $quantite, $urlPhoto);
        //}
        //return "index";
    //}
//}

?>