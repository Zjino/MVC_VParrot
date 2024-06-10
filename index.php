<?php

require_once('config.php'); // Inclure le fichier de configuration
require_once('services/ServiceConnexion.php'); // Inclure le fichier de connexion à la base de données
require_once('services/ServiceModel.php'); // Inclure le modèle de service
require_once('classes/Routeur.php'); // Inclure la classe Routeur

try {
    // Récupérer la route depuis l'URL
    $request = isset($_GET['r']) ? $_GET['r'] : 'home'; // Utiliser 'home' par défaut si 'r' n'est pas défini

    // Créer une instance du routeur et rendre le contrôleur approprié
    $routeur = new Routeur($request);
    $routeur->renderController();
} catch (Exception $e) {
    // Gérer les exceptions
    http_response_code(500);
    echo 'Erreur interne du serveur : ' . $e->getMessage();
}
