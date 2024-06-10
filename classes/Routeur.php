<?php
class Routeur
{
    private $request; // Stocke la requête entrante
    private $routes = [
        'home' => 'HomeController.php' // Définition des routes 
    ];

    public function __construct($request)
    {
        $this->request = $request; // Initialise la requête entrante
    }

    public function renderController()
    {
        // Vérifie si la route demandée existe dans la liste des routes
        if (array_key_exists($this->request, $this->routes)) {
            // Si oui, inclut le contrôleur correspondant à la route
            include_once(CLIENT_CONTROLLERS . $this->routes[$this->request]);
        } else {
            // Si aucune route ne correspond, affiche une erreur 404
            http_response_code(404);
            echo '404 - Page non trouvée';
        }
    }
}
