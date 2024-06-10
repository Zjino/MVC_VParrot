<?php
// Démarrage de la session
session_start();

// Inclusion des fichiers nécessaires
require_once("../../config.php");
require_once("../models/LoginModel.php");

// Vérification de la session pour rediriger vers HomeController si l'utilisateur est déjà connecté
if (isset($_SESSION['xRttpHo0greL39'])) {
    if (!empty($_SESSION['xRttpHo0greL39'])) {
        header("Location: HomeController.php");
    }
}

// Vérification de la soumission du formulaire
if (isset($_POST['envoyer'])) {
    // Vérification des champs email et mot de passe
    if (!empty($_POST['email']) and !empty($_POST['motdepasse'])) {
        // Récupération et nettoyage des données du formulaire
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        // Appel de la fonction getAdmin pour récupérer les informations de l'administrateur
        $admin = getAdmin($email, $motdepasse);

        // Vérification de l'existence de l'administrateur
        if ($admin) {
            // Enregistrement des informations de l'administrateur dans la session
            $_SESSION['xRttpHo0greL39'] = $admin;
            // Redirection vers HomeController
            header('Location: HomeController.php');
        } else {
            // Affichage d'un message d'erreur si l'administrateur n'est pas trouvé
            echo "Il y a un problème !";
            // Redirection vers LoginController (à décommenter si nécessaire)
            // header('Location: LoginController.php');
        }
    }
}

// Inclusion de la vue de connexion
include_once('../Views/LoginView.php');
