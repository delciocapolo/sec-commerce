<?php
// DEFINE THE BASE FOR THE APPLICATION
define("BASE_PATH", __DIR__);
define("API_PATH", __DIR__ . '/src/api');

require_once "src/routes/web.php";

// WEB CONFIG
require_once "src/views/constants/global.php";
require_once "src/views/components/index.php";

// CORE CONFIG
require_once "src/api/index.php";
require_once "src/views/helpers/cookies.php";
require_once "src/routes/renderer.php";

// API CONFIG
header('Access-Controll-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
date_default_timezone_set('Africa/Luanda');
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
   <script src="./src/views/lib/app.js" defer type="module"></script>
   <link rel="stylesheet" href="./src/views/styles/index.css">
</head>

<body>

   <?php
   if (getRootRoute() !== 'dashboard') {
      require_once "src/views/layout/header/index.php";
   }
   ?>

   <?php handleWebRoutes($web_routes); ?>

   <?php
   if (getRootRoute() !== 'dashboard') {
      require_once "src/views/layout/footer/index.php";
   }
   ?>

</body>

</html>