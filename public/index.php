<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/routes.php';
require_once __DIR__ . '/../config/database.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace('/Incident_manager-main/public', '', $url);

$routes = include __DIR__ . '/../config/routes.php';

if (isset($routes[$url])) {
    $controllerName = $routes[$url]['controller'];
    $actionName = $routes[$url]['action'];

    require_once __DIR__ . '/../src/Controller/' . $controllerName . '.php';
    $controller = new $controllerName();
    $controller->$actionName();
} else {
    if ($url === '' || $url === '/') {
        require_once __DIR__ . '/../src/Controller/HomeController.php';
        $controller = new HomeController();
        $controller->index();
    } else {
        http_response_code(404);
        echo "Erreur 404 : page non trouvée";
    }
}
