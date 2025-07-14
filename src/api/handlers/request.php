<?php

require 'response.php';

class HttpMethod
{
   /**
    * Analyzes the request URI and extracts API route segments and parameters.
    * This method is called internally to set up the routing context.
    *
    * @return array{resource: string|null, params: string[], queryParams: array}|null
    * An array containing 'resource', 'params', and 'queryParams' if a match is found, otherwise null.
    */
   static private function make()
   {
      $requestUri = parse_url($_SERVER['REQUEST_URI']);
      $path = $requestUri['path'] ?? '/';
      $queryString = $requestUri['query'] ?? '';

      if (preg_match('#^/api/(.*)$#i', $path, $matches)) {
         // $matches[0] conterá a string completa que correspondeu (ex: /api/users/123)
         // $matches[1] conterá o que foi capturado pelo "(.*)" (ex: users/123)

         $segments = explode('/', trim($matches[1], '/'));
         $resource = array_shift($segments);
         $queryParams = [];

         if (!empty($queryString)) {
            parse_str($queryString, $queryParams);
         }

         return [
            'resource' => $resource,
            'params' => $segments,
            'queryParams' => $queryParams
         ];
      }

      return null;
   }

   static private function is_route_match(string $route): bool
   {
      $data = self::make();
      return !is_null($data) && $data['resource'] === $route;
   }

   /**
    * 
    *
    * @param string $route
    * @param callable $callback { params: string[], queryParams: string[] }
    * @return void
    */
   public static function GET(string $route, callable $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] === 'GET' && self::is_route_match($route)) {
         $data = self::make();

         call_user_func($callback, $data['params'], $data['queryParams']);
         exit;
      }
   }

   /**
    * 
    *
    * @param string $route
    * @param callable $callback { requestBody: mixed, params: string[], queryParams: string[] }
    * @return void
    */
   public static function POST(string $route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && self::is_route_match($route)) {
         $data = self::make();
         $requestBody = json_decode(file_get_contents('php://input'), true);

         call_user_func($callback, $requestBody, $data['params'], $data['queryParams']);
         exit;
      }
   }

   public static function PUT(string $route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] === 'PUT' && self::is_route_match($route)) {
         $data = self::make();
         $requestBody = json_decode(file_get_contents('php://input'), true);

         call_user_func($callback, $requestBody, $data['params'], $data['queryParams']);
         exit;
      }
   }

   public static function DELETE(string $route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && self::is_route_match($route)) {
         $data = self::make();

         call_user_func($callback, $data['params'], $data['queryParams']);
         exit;
      }
   }

   public static function handleNotFound()
   {
      if (!headers_sent() && str_contains($_SERVER['REQUEST_URI'], 'api')) {
         return Response::json(["message" => "Route not found."], 404);
         exit;
      }
   }
}

class Request extends HttpMethod {}
