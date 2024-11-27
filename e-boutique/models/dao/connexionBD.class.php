<?php

include_once("config/configDB.php");


// ********* Classe englobante de PDO *************
class ConnexionBD {
    // Attribut représentant la connexion à la BD (de type PDO)
    private static ?PDO $instance = null;

    // Constructeur de ConnexionBD inutilisable de l’extérieur
    private function __construct() {}

    public static function getInstance(): PDO {
        // Si l’instance de PDO n’existe pas, on la crée 
        if (self::$instance === null) {
            $configuration = "mysql:host=" . ConfigDB::BD_HOTE . ";dbname=" . ConfigDB::BD_NOM;
            $utilisateur = ConfigDB::BD_UTILISATEUR;
            $motPasse = ConfigDB::BD_MOT_PASSE;
            // La classe utile est la classe PDO qui nous donne accès
            // à une connexion vers la base de données. 
            self::$instance = new PDO($configuration, $utilisateur, $motPasse);
            // S’assurer que les transactions se font avec les caractères UTF8
            self::$instance->exec("SET character_set_results = 'utf8'");
            self::$instance->exec("SET character_set_client = 'utf8'");
            self::$instance->exec("SET character_set_connection = 'utf8'");
        }
        // Maintenant qu’on est certain qu’elle existe, on la retourne
        return self::$instance;
    }

    // Fonction qui libère la connexion PDO (pour le garbage collector)
    public static function close(): void {
        self::$instance = null;
    }
}
?>
