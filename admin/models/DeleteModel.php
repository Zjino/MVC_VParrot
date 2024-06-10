<?php

/**
 * Fonction pour supprimer un produit en fonction de son ID.
 *
 * @param int $id L'identifiant du produit à supprimer.
 * @return void
 */
function supprimer($id)
{
    try {
        // Inclusion du fichier de connexion à la base de données
        require("../../services/ServiceConnexion.php");

        // Prépare la requête SQL pour supprimer un produit par son ID
        $req = $access->prepare("DELETE FROM produits WHERE id = ?");

        // Exécute la requête avec l'ID du produit en paramètre
        $req->execute([$id]);
    } catch (PDOException $e) {
        // Capture et gestion des exceptions de type PDOException
        echo "Erreur lors de la suppression du produit : " . $e->getMessage();
    }
}
