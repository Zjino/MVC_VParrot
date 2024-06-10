<?php
// Démarre la session
session_start();

// Vérifie si l'utilisateur est connecté, sinon redirige vers la page de connexion
if (!isset($_SESSION['xRttpHo0greL39'])) {
  header("Location: ../LoginController.php");
}

// Vérifie si la session de l'utilisateur est vide, sinon redirige vers la page de connexion
if (empty($_SESSION['xRttpHo0greL39'])) {
  header("Location: ../LoginController.php");
}

// Inclusion du modèle pour la suppression
require("../models/DeleteModel.php");
// Inclusion du service modèle
require("../../services/ServiceModel.php");

// Traitement de la demande de suppression
if (isset($_POST['valider'])) {
  if (isset($_POST['idproduit'])) {
    if (!empty($_POST['idproduit'])) {
      // Récupération de l'identifiant du produit à supprimer depuis le formulaire
      $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

      try {
        // Appel de la fonction de suppression
        supprimer($idproduit);
      } catch (Exception $e) {
        // Affichage de l'éventuelle erreur
        echo $e->getMessage();
      }
    }
  }

  // Redirection vers la même page après la suppression
  header("Location: " . $_SERVER['PHP_SELF']);
  exit(); // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
}

// Récupération de tous les produits
$Produits = afficher();

// Inclusion de la vue de suppression
include('../Views/DeleteView.php');
