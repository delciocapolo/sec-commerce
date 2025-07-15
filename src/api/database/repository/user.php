<?php

require API_PATH . '/database/utils/queryBuilder.php';

$query_builder = new QueryBuilder($database_connection);

class User
{
   private static string $table = 'usuarios';

   public static function users()
   {
      global $query_builder;
      return $query_builder->table(self::$table)
         ->select(['*'])
         ->get();
   }

   /**
    * @param array{nome: string, email: string, funcao_id: int} $data
    * @return void
    */
   public static function create(array $data)
   {
      global $query_builder;
      return $query_builder->table(self::$table)
         ->insert(
            [
               'nome' => $data['nome'],
               'email' => $data['email'],
               'password' => password_hash($data['password'], PASSWORD_BCRYPT),
               'funcao_id' => $data['funcao_id']
            ]
         );
   }
}
