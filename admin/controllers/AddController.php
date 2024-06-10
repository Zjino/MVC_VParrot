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

// Inclusion du modèle pour l'ajout
require("../models/AddModel.php");

// Traitement de la soumission du formulaire d'ajout
if (isset($_POST['valider'])) {
  if (
    isset($_POST['image']) and isset($_POST['nom']) and isset($_POST['annee']) and isset($_POST['km'])
    and isset($_POST['prix']) and isset($_POST['desc'])
  ) {
    if (
      !empty($_POST['image']) and !empty($_POST['nom']) and !empty($_POST['annee'])
      and !empty($_POST['km']) and !empty($_POST['prix']) and !empty($_POST['desc'])
    ) {
      // Récupération des données du formulaire
      $image = htmlspecialchars(strip_tags($_POST['image']));
      $nom = htmlspecialchars(strip_tags($_POST['nom']));
      $annee = htmlspecialchars(strip_tags($_POST['annee']));
      $km = htmlspecialchars(strip_tags($_POST['km']));
      $prix = htmlspecialchars(strip_tags($_POST['prix']));
      $desc = htmlspecialchars(strip_tags($_POST['desc']));

      try {
        // Appel de la fonction pour ajouter un produit
        ajouter($image, $nom, $annee, $km, $prix, $desc);
      } catch (Exception $e) {
        // Affichage de l'éventuelle erreur
        echo $e->getMessage();
      }
    }
  }
  // Redirection vers la même page après l'ajout
  header("Location: " . $_SERVER['PHP_SELF']);
  exit(); // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
}

// Inclusion de la vue d'ajout
include('../Views/AddView.php');
