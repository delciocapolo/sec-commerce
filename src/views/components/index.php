<?php
function handlePathComponents(string $BASE_PATH)
{
   try {
      $componentsPath = $BASE_PATH . "/src/views/components/";

      // check is directory exists
      if (!is_dir($componentsPath)) {
         throw new Exception("Diretório de componentes não encontrado: " . $componentsPath);
      }

      // get all entries in the components directory
      $entries = scandir($componentsPath);

      // filter out the entries to get only directories
      $directories = array_filter($entries, function ($entry) use ($componentsPath) {
         return $entry !== '.' && $entry !== '..' && is_dir($componentsPath . $entry);
      });

      // reindex the array to have a clean numeric index
      $directories = array_values($directories);

      foreach ($directories as $component) {
         $componentPath = BASE_PATH . "/src/views/components/{$component}/index.php";

         if (file_exists($componentPath)) {
            require_once $componentPath;
         }
      }
   } catch (\Throwable $th) {
      die("Erro ao carregar componentes: " . $th->getMessage());
   }
}

handlePathComponents(BASE_PATH);
