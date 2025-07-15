<?php

class Response
{
   public static function json(array $data, int $status = 200)
   {
      http_response_code($status);
      header('Content-Type: application/json; charset=UTF-8');
      echo json_encode($data, JSON_PRETTY_PRINT);
      exit;
   }
}
