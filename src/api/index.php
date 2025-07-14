<?php

require_once 'config/environment.php';
require_once 'config/database.php';
require_once 'routes/index.php';

function bootstrapMigrations(PDO $database_connection)
{
   $sql_file = file_get_contents(BASE_PATH . "/src/api/database/query/setup.sql");

   if ($sql_file !== false) {
      $rows = explode(';', $sql_file);

      foreach ($rows as $row) {
         if (!empty($row)) {
            $database_connection->exec($row);
         }
      }
   }
}

bootstrapMigrations($database_connection);
