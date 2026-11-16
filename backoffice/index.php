<?php
// Point d'entrée unique : http://localhost:8000/index.php?page=consultations
require_once 'app/helpers.php';
require_once 'app/routes.php';
require_once 'app/Controllers/Controller.php';

// 1. Quelle page est demandée ? (dashboard par défaut)
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// 2. Si la page n'existe pas dans routes.php, on retourne au dashboard
if (!isset($routes[$page])) {
    $page = 'dashboard';
}

// 3. On récupère le nom du contrôleur et la méthode à appeler
$controllerName = $routes[$page][0];
$method = $routes[$page][1];

// 4. On charge le fichier du contrôleur, on crée l'objet et on appelle la méthode
require_once 'app/Controllers/' . $controllerName . '.php';
$controller = new $controllerName();
$controller->$method();
