<?php

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

function handleWebRoutes(array $web_routes)
{
   $current_page = getRootRoute();

   foreach ($web_routes as $route) {
      $route_path_match = (is_array($route['url']) && array_search($current_page, $route['url']) !== false) || (!is_array($route['url']) && $route['url'] === $current_page);

      if ($route_path_match) {
         if (isset($route['auth']) && $route['auth'] === true) {
            // AUTH HANDLER HERE
            if (true) {
               http_response_code(200);
               require_once $route['component'];
               return;
            } else {
               http_response_code(401);
               require_once BASE_PATH . "/src/views/layout/401/index.php";
               return;
            }
         } else {
            http_response_code(200);
            require_once $route['component'];
            return;
         }
      }
   }

   http_response_code(404);
   require_once BASE_PATH . "/src/views/layout/404/index.php";
   exit;
}
