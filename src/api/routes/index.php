<?php

require BASE_PATH . '/src/api/handlers/request.php';

Request::GET('user', function ($params, $queryParams) {
   return Response::json(
      [
         'data' => ['params' => $params, 'queryParams' => $queryParams]
      ]
   );
});

Request::handleNotFound();
