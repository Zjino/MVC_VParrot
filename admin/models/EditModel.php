<?php

/**
 * Fonction pour afficher les détails d'un produit en fonction de son ID.
 *
 * @param int $id L'identifiant du produit à afficher.
 * @return array  Les détails du produit sous forme d'objet.
 */
function afficherUnProduit($id)
{
    // Vérifie si le fichier de connexion à la base de données est requis
    if (require("../../services/ServiceConnexion.php")) {
        // Prépare la requête SQL pour sélectionner un produit par son ID
        $req = $access->prepare("SELECT * FROM produits WHERE id=?");

        // Exécute la requête avec l'ID du produit en paramètre
        $req->execute(array($id));

        // Récupère les résultats sous forme d'objets
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        // Retourne les données récupérées
        return $data;

        // Ferme le curseur de la requête
        $req->closeCursor();
    }
}

/**
 * Fonction pour modifier les détails d'un produit existant.
 *
 * @param string $image L'URL de l'image du produit.
 * @param string $nom   Le nom du produit.
 * @param int    $annee L'année de production du produit.
 * @param int    $km    Le kilométrage du produit.
 * @param float  $prix  Le prix du produit.
 * @param string $desc  La description du produit.
 * @param int    $id    L'identifiant du produit à modifier.
 * @return bool         Retourne true si la modification est réussie, false sinon.
 */
function modifier($image, $nom, $annee, $km, $prix, $desc, $id)
{
    try {
        // Inclusion du fichier de connexion à la base de données
        require("../../services/ServiceConnexion.php");

        // Prépare la requête SQL pour mettre à jour les détails du produit
        $req = $access->prepare("UPDATE produits SET `image` = ?, nom = ?, annee = ?, km = ?, prix = ?, `description` = ? WHERE id=?");

        // Exécute la requête avec les nouvelles valeurs du produit et son ID
        $req->execute(array($image, $nom, $annee, $km, $prix, $desc, $id));

        // Ferme le curseur de la requête
        $req->closeCursor();

        // Retourne true pour indiquer que la modification a réussi
        return true;
    } catch (PDOException $e) {
        // Capture et gestion des exceptions de type PDOException
        echo "Erreur lors de la modification du produit : " . $e->getMessage();

        // Retourne false pour indiquer que la modification a échoué
        return false;
    }
}
