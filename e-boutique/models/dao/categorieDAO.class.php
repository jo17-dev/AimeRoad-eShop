<?php

include_once("connexionBD.class.php");
include_once("dao.interface.php");
class CategorieDAO implements DAO {
    public static function chercher(mixed $cles): ?object{
        try{
            $connexion = ConnexionBD::getInstance();
        }catch(Exception $e){
            echo "impossible de se connecter à la base de donnés";
            die();
        }

        $statement = $connexion->prepare("SELECT * FROM categorie");

        $result  = $statement->execute();

        $rows = $statement->fetchAll();
        return null;

    }
}


?>