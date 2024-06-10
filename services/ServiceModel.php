<?php

// Définition de la fonction "afficher"
function afficher()
{
    try {
        // Inclusion du fichier de connexion à la base de données
        require("ServiceConnexion.php");

        // Préparation de la requête SQL pour sélectionner tous les produits, triés par ordre décroissant d'identifiant
        $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");

        // Exécution de la requête SQL
        $req->execute();

        // Récupération de toutes les lignes de résultat sous forme d'objets
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        // Retourne les données récupérées
        return $data;
    } catch (PDOException $e) {
        // En cas d'erreur lors de l'exécution de la requête, affiche un message d'erreur
        echo "Erreur lors de la récupération des produits : " . $e->getMessage();
        // Retourne un tableau vide
        return [];
    }
}
