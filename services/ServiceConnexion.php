<?php

//  Connexion à la base de données
try {
    // Création d'une nouvelle instance de PDO avec les informations de connexion
    $access = new PDO("mysql:host=localhost;dbname=vpgarage;charset=utf8", "root", "");

    // Configure PDO pour afficher les erreurs de manière à ce qu'elles génèrent des avertissements
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    // En cas d'échec de la connexion, affiche un message d'erreur et arrête l'exécution du script
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
