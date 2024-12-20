<?php
//include_once "models/dao/clientDAO.class.php";
include_once "models/produit.class.php";

class VoirModifierProduit extends Controleur{
    private ?Produit $unProduit = null;
	public function __construct()
	{
		parent::__construct();

	}

    public function getProduit(): ?Produit {
        return $this->unProduit;
    }

	public function executerAction():string
	{
	
		if (isset($_GET['idproduit'])) { // c'est vraiment con de faire ça comme ça hahah. pas le temps
			$unCode = $_GET['idproduit'];
			$unProduit = ProduitDAO::chercherParId( (int) $unCode);

            $this->unProduit = new Produit( $unProduit['id'],$unProduit['cate'], $unProduit['nom'], $unProduit['prixUnitaire'],$unProduit['quantite'], $unProduit['urlPhoto']);
            
		    return "visualiser_produit_admin";
		}

}
}