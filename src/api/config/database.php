<?php
$connection_config = "mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_NAME']}";

try {
   $database_connection = new PDO(
      $connection_config,
      $_ENV['DATABASE_USER'],
      $_ENV['DATABASE_PASSWORD']
   );
   echo "connection successfully";
} catch (\Throwable $error) {
   throw new Exception($error->getMessage());
}
