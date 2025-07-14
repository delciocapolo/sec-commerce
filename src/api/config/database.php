<?php
class DatabaseConnection
{
   private int $ATTEMPT = 1;
   private int $MAX_ATTEMPT_CONNECTION = 10;
   private string $dsn;

   public function __construct()
   {
      $this->dsn = "mysql:host={$_ENV['DATABASE_HOST']};port={$_ENV["DATABASE_PORT"]};dbname={$_ENV['DATABASE_NAME']}";
   }

   public function init()
   {
      try {
         $database_connection = new PDO(
            $this->dsn,
            $_ENV['DATABASE_USER'],
            $_ENV['DATABASE_PASSWORD']
         );

         $database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         return $database_connection;
      } catch (\Throwable $error) {
         if ($this->ATTEMPT <= $this->MAX_ATTEMPT_CONNECTION) {
            $this->ATTEMPT++;
            sleep(1);
            return $this->init();
         } else {
            throw new Exception("Failed to connect to the database after " . $this->MAX_ATTEMPT_CONNECTION . " attempts: " . $error->getMessage());
         }
      }
   }
}

$instance = new DatabaseConnection();
$database_connection = $instance->init();
