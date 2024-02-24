<?php
/*
 * Author: Dahir Muhammad Dahir
 * Date: 12-April-2020 5:07 AM
 * About: I will tell you later
 */

namespace fingerprint;

class Router {
    private $routes = [];

    // Define a route with a callback function
    public function route($pattern, $callback) {
        // Add delimiters to the pattern
        $pattern = '~' . $pattern . '~';
        $this->routes[$pattern] = $callback;
    }

    // Match the requested URL with defined routes and call the callback function if matched
    public function execute($url) {
        foreach ($this->routes as $pattern => $callback) {
            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches); // Remove the first match (full URL)
                call_user_func_array($callback, $matches);
                return;
            }
        }
        // If no route matches, show a 404 error
        require("./src/views/404.php");
    }
}


// Example usage:
$router = new Router();

// Define routes
$router->route('home', function() {
    require("./src/views/home.php");
});

$router->route('login', function() {
    require("./src/views/login.php");
});

$router->route('enroll', function() {
    require("./src/views/enroll.php");
});

// Add more routes as needed...

// Execute the router
$request_uri = $_SERVER['REQUEST_URI'];
$router->execute($request_uri);
