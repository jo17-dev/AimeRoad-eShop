<?php
abstract class Utilisateur {
    private $nom;
    private $prenom;
    private $email;
    private $hashed_password;

    public function __construct($nom, $prenom, $email, $hashed_password) {
        $this->$nom = $nom;
        $this->$prenom = $prenom;
        $this->$email = $email;
        $this->$hashed_password =$hashed_password;

        if(!est_connecte()){ // si le  user n'est pas connecté
            $_SESSION["user"] = array("nom"=> $nom, "prenom"=> $prenom, "email"=> $email, "hashed_password"=> $hashed_password);
        }
    }

    public function est_connecte(){
        return isset($_SESSION["user"]) ? true : false ;
    }

    

    public function deconnecter_utilisateur(){
        $resultat = session_abort();
        echo $resultat ? "utilisateur déconnecté" : "echec de la deconnexion";
        return $resultat;
    }
}
?>