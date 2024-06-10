<?php

// Inclusion du fichier contenant la fonction "afficher"
require_once("services/ServiceModel.php");

// Appel de la fonction "afficher" pour récupérer les produits
$Produits = afficher();

// Inclusion de la vue HomeView qui affiche les produits récupérés
include(CLIENT_VIEWS . 'HomeView.php');
