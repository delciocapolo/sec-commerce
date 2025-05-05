<?php
$dsn = "mysql:host={$_ENV['DATABASE_HOST']};port={$_ENV["DATABASE_PORT"]};dbname={$_ENV['DATABASE_NAME']}";

try {
   $database_connection = new PDO(
      $dsn,
      $_ENV['DATABASE_USER'],
      $_ENV['DATABASE_PASSWORD']
   );
   $database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $error) {
   throw new Exception($error->getMessage());
}
