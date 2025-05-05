<?php
define("BASE_PATH", __DIR__);

require_once "src/constants/global.php";
require_once "src/api/config/environment.php";
// require_once "src/api/config/database.php";
require_once "src/components/index.php";
?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $COMPANY_NAME ?></title>
   <meta name="description" content="Uma plataforma para vendas de dispositivos de segurança.">
   <meta name="keywords" content="segurança, dispositivos, vendas, ecommerce">
   <script src="https://unpkg.com/htmx.org@2.0.4"></script>
   <script src="//unpkg.com/alpinejs" defer></script>
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
   <script src="./src/lib/app.js" defer type="module"></script>
   <link rel="stylesheet" href="./src/styles/index.css">
</head>

<body>

   <?php require_once "src/components/Layout/header/index.php"; ?>
   <?php require_once "src/components/Layout/homepage/index.php"; ?>
   <?php require_once "src/components/Layout/footer/index.php"; ?>

</body>

</html>