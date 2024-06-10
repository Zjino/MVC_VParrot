<?php

/**
 * Fonction pour ajouter un contact de véhicule dans la base de données.
 *
 * @param string $nom       Le nom de la personne
 * @param string $prenom    Le prénom de la personne
 * @param string $email     L'email de la personne
 * @param string $vehicules Les informations sur les véhicules
 * @param string $message   Le message de la personne
 * @return bool             Retourne true si l'insertion est réussie, false sinon
 */
function ajouter($nom, $prenom, $email, $vehicules, $message)
{
    try {
        // Inclusion du fichier de connexion à la base de données
        require("../../services/ServiceConnexion.php");

        // Préparation de la requête SQL pour insérer des données dans la table "contact_vehicules"
        $req = $access->prepare("INSERT INTO contact_vehicules (nom, prenom, email, vehicules, message) VALUES (?, ?, ?, ?, ?)");

        // Exécution de la requête SQL avec les valeurs passées en paramètre
        $req->execute([$nom, $prenom, $email, $vehicules, $message]);

        // Retourne "true" pour indiquer que l'opération d'insertion a réussi
        return true;
    } catch (PDOException $e) {
        // Capture et gestion des exceptions de type PDOException
        echo "Erreur lors de l'envoi du message : " . $e->getMessage();
        // Retourne "false" pour indiquer que l'opération d'insertion a échoué
        return false;
    }
}
