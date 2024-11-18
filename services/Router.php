<?php

use App\Controller\ErrorController;
use Services\LoaderFile;

require_once '../vendor/altorouter/altorouter/AltoRouter.php';

$router = new AltoRouter();

LoaderFile::set("routes", '../config/Routes.yaml');
$routes = LoaderFile::get("routes");


foreach($routes['routes'] as $route) {
     $router->map(
          $route['method'], 
          $route['path'],
          $route['handler'],
          $route['name']
     );
}

$match = $router->match();


if ($match) {
    list($controller, $method) = explode('::', $match['target']);
    if (class_exists($controller) && method_exists($controller, $method)) {
        // Appeler la méthode du contrôleur
        call_user_func_array([new $controller, $method], $match['params']);
    } else {
        header("HTTP/1.0 500 Internal Server Error");
        echo "Erreur : méthode ou classe introuvable.";
    }
} else {
    header("HTTP/1.0 404 Not Found");
    $controller = new ErrorController();
    $controller->index();
}