<?php
// Démarrage de la session
session_start();

// Vérification de l'existence de la session et redirection vers LoginController si non connecté
if (!isset($_SESSION['xRttpHo0greL39']) || empty($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../LoginController.php");
}

// Inclusion des fichiers nécessaires
require_once("../../config.php");
require_once("../../services/ServiceModel.php");

// Définition de la fonction adminHome pour afficher la page d'accueil de l'administrateur
function adminHome()
{
    // Appel de la fonction afficher pour récupérer la liste des produits
    $produits = afficher();
    // Inclusion de la vue HomeView avec la liste des produits
    include(ADMIN_VIEWS . 'HomeView.php');
}

// Appel automatique de la fonction adminHome lors du chargement de ce fichier
adminHome();
