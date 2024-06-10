<?php

// Inclusion du fichier contenant la fonction "ajouter"
require_once("../models/MessageModel.php");

// Vérifie si le formulaire a été soumis
if (isset($_POST['valider'])) {
    // Vérifie si toutes les données requises sont présentes dans $_POST
    if (
        isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['vehicules'])
        and isset($_POST['message'])
    ) {
        // Vérifie si aucune des données requises est vide
        if (
            !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email'])
            and !empty($_POST['vehicules']) and !empty($_POST['message'])
        ) {
            // Nettoie et récupère les données du formulaire
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $vehicules = htmlspecialchars(strip_tags($_POST['vehicules']));
            $message = htmlspecialchars(strip_tags($_POST['message']));

            // Tente d'ajouter les données à la base de données en utilisant la fonction "ajouter"
            try {
                ajouter($nom, $prenom, $email, $vehicules, $message);
            } catch (Exception $e) {
                // En cas d'erreur, affiche le message d'erreur
                echo $e->getMessage();
            }
        }
    }
    // Redirection vers la même page après la soumission du formulaire
    header("Location: " . $_SERVER['PHP_SELF']);
    exit(); // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
}

// Inclusion de la vue qui affiche les cartes de véhicules d'occasion
include('../Views/UsedCardView.php');
