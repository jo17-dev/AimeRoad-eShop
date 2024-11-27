<?php

include("connexionBD.class.php");
include("dao.interface.php");


class ClientDAO implements DAO {
    public static function chercher(mixed $cles): ?object{
        return null;
    }

    public static function chercherParId(int $id): array {
        $connexion =  ConnexionBD::getInstance();

        $statement = $connexion->prepare("SELECT * FROM client INNER JOIN administrateur ON client.id=administrateur.idClient");
        $statement->execute();

        $row = $statement->fetchAll();

        if($row == false){
            return [];
        }
        
        ConnexionBD::close();

        return $row;
    }

    public static function miseAJour(int $id, string $changements): bool{
        $connexion =  ConnexionBD::getInstance();

        $result = $connexion->exec("UPDATE client SET " .$changements . " WHERE id=$id");

        ConnexionBD::close();

        return $result;
    }
}

?>