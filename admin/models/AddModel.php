<?php

/**
 * Fonction pour ajouter un produit dans la base de données.
 *
 * @param string $image L'URL de l'image du produit.
 * @param string $nom Le nom du produit.
 * @param int $annee L'année du produit.
 * @param int $km Le kilométrage du produit.
 * @param float $prix Le prix du produit.
 * @param string $desc La description du produit.
 * @return bool Retourne true si l'insertion a réussi, false sinon.
 */
function ajouter($image, $nom, $annee, $km, $prix, $desc)
{
    try {
        // Inclusion du fichier de connexion à la base de données
        require("../../services/ServiceConnexion.php");

        // Préparation de la requête SQL pour insérer un nouveau produit
        $req = $access->prepare("INSERT INTO produits (image, nom, annee, km, prix, description) VALUES (?, ?, ?, ?, ?, ?)");

        // Exécution de la requête avec les valeurs fournies
        $req->execute([$image, $nom, $annee, $km, $prix, $desc]);

        // Retourne true pour indiquer que l'insertion a réussi
        return true;
    } catch (PDOException $e) {
        // Affiche un message d'erreur en cas d'exception
        echo "Erreur lors de l'ajout du produit : " . $e->getMessage();

        // Retourne false pour indiquer que l'insertion a échoué
        return false;
    }
}
