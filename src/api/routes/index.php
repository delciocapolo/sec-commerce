<?php

require BASE_PATH . '/src/api/handlers/request.php';
require API_PATH . '/database/repository/user.php';

Request::GET('users', function ($params, $queryParams) {
   return Response::json(
      ['data' => User::users()]
   );
});

Request::POST('users', function ($requestBody, $params, $queryParams) {
   return Response::json(
      ['data' => User::create($requestBody)]
   );
});

Request::handleNotFound();
