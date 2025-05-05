<?php

require_once "web.php";

function getRootRoute()
{
   $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
   $request_uri = rtrim($request_uri, '/');

   if ($request_uri === '') {
      return '/';
   }

   $path_segments = explode('/', $request_uri);
   $path_segments = array_filter($path_segments);

   return $path_segments[1] ?? '/';
}

function handleWebRoutes(array $routes)
{
   $current_page = getRootRoute();

   foreach ($routes as $route) {
      if ($current_page === $route['url']) {
         require_once $route['component'];
         return;
      }
   }

   http_response_code(404);
   require_once BASE_PATH . "/src/views/layout/404/index.php";
   exit;
}

handleWebRoutes($web_routes);
