<?php

$web_routes = [
   [
      'url' => '*',
      'component' => BASE_PATH . '/src/views/layout/404/index.php'
   ],
   [
      'url' => ['/', 'home'],
      'component' => BASE_PATH . '/src/views/layout/home/index.php'
   ],
   [
      'url' => 'sobre',
      'component' => BASE_PATH . '/src/views/layout/about/index.php'
   ],
   [
      'url' => 'loja',
      'component' => BASE_PATH . '/src/views/layout/shop/index.php'
   ],
   [
      'url' => 'dashboard',
      'component' => BASE_PATH . '/src/views/layout/dashboard/index.php',
      'auth' => true
   ]
];
