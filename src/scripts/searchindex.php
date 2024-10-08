<?php
    $routesjson = 'src/routes.json';
    $appversion = $_ENV['APP_VERSION'];

    if (file_exists('installation_done.txt')) {
        // delete whole search table
        $sql = "DELETE FROM search";
        $conn->query($sql);

        // Read the JSON file
        $json = file_get_contents($routesjson);
        $data = json_decode($json, true);

        // Filter array to exclude entries starting with /api/ or without "search" entry
        $filteredRoutes = array_filter($data['routes'], function($route) {
            return !preg_match('/^\/api\//', $route['path']) && (!isset($route['search']) || $route['search'] === true);
        });

        // add entrys
        foreach ($filteredRoutes as $route) {
            $filePath = 'src/pages/' . $route['file'];

            // Run the PHP
            ob_start();
            include($filePath);
            $content = ob_get_clean();

            // Remove all HTML tags
            $content = strip_tags($content);
            // Remove style tags and their content
            $content = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $content);

            // format text
            $content = preg_replace('/\s+/', ' ', $content);
            $content = trim($content);

            $sql = "INSERT INTO search (path, title, content, version) VALUES ('" . $route['path'] . "', 'unknown', '" . $content . "', '" . $appversion . "')";
            $conn->query($sql);
        }
    }