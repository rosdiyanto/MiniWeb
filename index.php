<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/helpers.php'; // Memuat helper

// Load configuration
$configPath = __DIR__ . '/app/config/database.php';
if (!file_exists($configPath)) {
    die("Config file not found: " . $configPath);
}

// Load configuration
$config = require $configPath;

// Initialize Medoo
$database = new Medoo\Medoo($config);

// Define base URL
define('BASE_URL', '/');

// Get the requested URL using REQUEST_URI
$requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

// Remove the query string from REQUEST_URI
$requestUri = explode('?', $requestUri)[0];

// Remove the base path (if any)
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if (strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
}

// Remove "index.php" from the request URI
$requestUri = str_replace('index.php', '', $requestUri);

// Remove leading slash for consistency
$url = ltrim($requestUri, '/');

// Default routing: if no URL is provided, use HomeController and index action
if ($url === '') {
    $controllerName = 'home';
    $actionName = 'index';
} else {
    // Process the URL into controller, action, and parameters
    $url = rtrim($url, '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    $controllerName = !empty($url[0]) ? $url[0] : 'home';
    $actionName = !empty($url[1]) ? $url[1] : 'index';
    $parameter = !empty($url[2]) ? $url[2] : null;

    // If no action is specified, use the index action
    if (empty($url[1])) {
        $actionName = 'index';
    }
}

// Include the controller file
$controllerPath = __DIR__ . '/app/controllers/' . $controllerName . 'Controller.php';
if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controllerClass = ucfirst($controllerName) . 'Controller';
    $controller = new $controllerClass($database);

    // Call the action method on the controller
    if (method_exists($controller, $actionName)) {
        if (isset($parameter)) {
            $controller->{$actionName}($parameter);
        } else {
            $controller->{$actionName}();
        }
    } else {
        echo "Action not found.";
    }
} else {
    echo "Controller not found.";
}
