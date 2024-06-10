<?php
// Démarrage de la session
session_start();

// Vérification de la session et redirection vers LoginController si non connecté
if (!isset($_SESSION['xRttpHo0greL39']) || empty($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../LoginController.php");
}

// Inclusion du modèle EditModel.php
require("../models/EditModel.php");

// Vérification  et de  validité de l'identifiant dans la requête GET
if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: HomeController.php");
}

// Récupération des données du produit correspondant à l'identifiant
$id = $_GET['id'];
$leProduit = afficherUnProduit($id);

// Traitement de la soumission du formulaire de modification
if (isset($_POST['valider'])) {
    // Vérification de la présence et de la validité des champs
    if (isset($_POST['image'], $_POST['nom'], $_POST['annee'], $_POST['km'], $_POST['prix'], $_POST['desc']) && !empty($_POST['image']) && !empty($_POST['nom']) && !empty($_POST['annee']) && !empty($_POST['km']) && !empty($_POST['prix']) && !empty($_POST['desc'])) {
        // Nettoyage des données entrées
        $image = htmlspecialchars(strip_tags($_POST['image']));
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
        $annee = htmlspecialchars(strip_tags($_POST['annee']));
        $km = htmlspecialchars(strip_tags($_POST['km']));
        $prix = htmlspecialchars(strip_tags($_POST['prix']));
        $desc = htmlspecialchars(strip_tags($_POST['desc']));

        // Modification du produit dans la base de données
        modifier($image, $nom, $annee, $km, $prix, $desc, $id);
        // Redirection vers la page d'accueil après modification
        header('Location: HomeController.php');
        exit; // Arrêt de l'exécution du script après la redirection
    }
}

// Inclusion de la vue EditView.php
include('../Views/EditView.php');
