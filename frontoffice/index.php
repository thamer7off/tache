<?php
// Point d'entrée : http://localhost:8000/index.php?page=consultations
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Page => nom du contrôleur
$routes = [
    'home'          => 'HomeController',
    'consultations' => 'ConsultationController',
    'messages'      => 'MessageController',
    'mesures'       => 'MesureController',
    'alertes'       => 'AlerteController',
];

if (!isset($routes[$page])) {
    $page = 'home';
}

$controllerName = $routes[$page];
require_once 'Controllers/' . $controllerName . '.php';
$controller = new $controllerName();
$controller->index();
