<?php

// Configuration des erreurs
ini_set('display_errors', 'on');
error_reporting(E_ALL);

// Définir les constantes de chemins et URL de base
$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST', 'http://' . $host . '/VPERROTGARAGE/');
define('ROOT', $root . '/VPERROTGARAGE/');

// Chemins pour la partie client
define('CLIENT_CONTROLLERS', ROOT . 'client/controllers/');
define('CLIENT_VIEWS', ROOT . 'client/views/');
define('CLIENT_MODELS', ROOT . 'client/models/');
define('CLASSES_ROUTEUR', ROOT . 'classes/');
define('CLIENT_ASSETS_CSS', HOST . 'client/assets/css/');
define('CLIENT_ASSETS_IMGAGES', HOST . 'client/assets/images/');

// Chemins pour la partie admin
define('ADMIN_CONTROLLERS', ROOT . 'admin/controllers/');
define('ADMIN_VIEWS', ROOT . 'admin/views/');
define('ADMIN_MODELS', ROOT . 'admin/models/');
define('ADMIN_ASSETS', HOST . 'admin/assets/css/');
define('ADMIN_ASSETS_IMGAGES', HOST . 'client/assets/images/');
