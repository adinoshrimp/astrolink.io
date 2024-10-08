<?php
    $viewDir = '/src/pages/';
    $apiDir = '/src/api/';

    // Read the JSON file
    $json = file_get_contents(__DIR__ . '/src/routes.json');
    $routes = json_decode($json, true)['routes'];

    // Loop through the routes and include the corresponding PHP file
    foreach ($routes as $route) {
        // Use fnmatch to check if the request matches the route pattern
        if (fnmatch($route['path'], $request)) {
            // Determine the directory based on the request path
            if (strpos($request, '/api/') === 0) {
                header("Content-Type: text/plain");
                $filePath = $apiDir;
            } else {
                $filePath = $viewDir;
            }
            require __DIR__ . $filePath . $route['file'];
            return; // Return control to the calling code
        }
    }

    // Default case if no route matches
    require __DIR__ . $viewDir . 'error.php';