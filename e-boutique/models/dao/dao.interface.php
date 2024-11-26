<?php
/* Description : Interface à implémenter pour tous les DAO
 */

interface DAO {
    /**
     * Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre.
     * Notes : 
     * 1) On retourne null si non-trouvé.
     * 2) Si la clé primaire est composée, alors le paramètre est un tableau associatif.
     */
    public static function chercher(mixed $cles): ?object;

    /**
     * Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD.
     */
    // public static function chercherTous(): array;

    // /**
    //  * Comme la méthode chercherTous, mais en appliquant le filtre (clause WHERE ...) reçu en paramètre.
    //  */
    // public static function chercherAvecFiltre(string $filtre): array;

    // /**
    //  * Cette méthode insère l'objet reçu en paramètre dans la table.
    //  * Retourne true/false selon que l'opération a été un succès ou pas.
    //  */
    // public static function inserer(object $unObjet): bool;

    // /**
    //  * Cette méthode modifie tous les champs de l'objet reçu en paramètre dans la table.
    //  */
    // public static function modifier(object $unObjet): bool;

    // /**
    //  * Cette méthode supprime l'objet reçu en paramètre de la table.
    //  */
    // public static function supprimer(object $unObjet): bool;
}
?>
