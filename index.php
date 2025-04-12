<?php
include "src/constants/global.php";
include "src/components/Layout/header/index.php";
?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $COMPANY_NAME ?></title>
   <meta name="description" content="Uma plataforma para vendas de dispositivos de segurança.">
   <meta name="keywords" content="segurança, dispositivos, vendas, ecommerce">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <script src="https://unpkg.com/htmx.org@2.0.4"></script>
   <script src="//unpkg.com/alpinejs" defer></script>
   <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>
   <script src="./src/lib/app.js" defer type="module"></script>
   <link rel="stylesheet" href="./src/styles/index.css">
</head>

<body>
   <main class="w-full bg-red-500">
   </main>

   <footer>
      <p>&copy; 2023 Sec Commerce. Todos os direitos reservados.</p>
   </footer>

</body>

</html>