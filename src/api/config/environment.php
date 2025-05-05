<?php

function loadEnv($path)
{
   if (!file_exists($path)) return;

   $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
   foreach ($lines as $line) {
      if (str_starts_with(trim($line), '#')) continue;

      list($key, $value) = explode('=', $line, 2);
      $key = trim($key);
      $value = trim($value);

      // remove aspas
      $value = trim($value, "'\"");

      putenv("$key=$value");
      $_ENV[$key] = $value;
      $_SERVER[$key] = $value;
   }
}

try {
   loadEnv(BASE_PATH . "/.env");

   $envs = [
      'DATABASE_HOST' => $_ENV["DATABASE_HOST"],
      'DATABASE_NAME' => $_ENV["DATABASE_NAME"],
      'DATABASE_USER' => $_ENV["DATABASE_USER"],
      'DATABASE_PORT' => $_ENV["DATABASE_PORT"],
      'DATABASE_PASSWORD' => $_ENV["DATABASE_PASSWORD"]
   ];

   foreach ($envs as $key => $value) {
      if (!isset($value) || empty($value)) {
         throw new Exception("Error Processing [$key] Var");
      }
   }
} catch (\Throwable $th) {
   throw new Exception("Error Processing Env Vars");
}
