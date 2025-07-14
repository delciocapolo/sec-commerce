<?php
// parse_str($_SERVER['QUERY_STRING'], $current_query);

$SIDEBAR_MENU = [
   [
      'name' => 'Início',
      'url' => '/dashboard',
      'icon' => 'material-symbols-light:home-outline-rounded'
   ],
   [
      'name' => 'Pedidos',
      'url' => '/dashboard-pedidos',
      'icon' => 'lets-icons:order-light'
   ],
   [
      'name' => 'Clientes',
      'url' => '/dashboard-clientes',
      'icon' => 'fluent:person-20-regular'
   ],
   [
      'name' => 'Produtos',
      'url' => '/dashboard-produtos',
      'icon' => 'ph:basket'
   ]
];

$SIDEBAR_MENU = array_map(function ($array) {
   $array['current'] = str_ends_with($array['url'], getRootRoute()) ? 'true' : 'false';
   return $array;
}, $SIDEBAR_MENU);
?>

<main class="flex">
   <aside class="flex-none min-h-screen w-32">
      <div class=" top-0 left-0 min-h-screen w-32 py-10 bg-(--primary-900)">
         <nav class="w-fit mx-auto">
            <div class="">
               <h1 class="text-2xl font-bold text-(--white-100) text-center">M&S</h1>
            </div>
            <ul class="mt-10" role="list">
               <?php foreach ($SIDEBAR_MENU as $menu): ?>
                  <li class="not-last-of-type:mb-7">
                     <a href="<?= $menu['url'] ?>" aria-checked="<?= $menu['current'] ?>" target="_self" rel="noopener noreferrer" class=" group px-1 py-2 bg-(--white-100)/40 rounded-lg flex items-center justify-center aria-checked:bg-(--white-100)">
                        <?= IconifyComponent(
                           [
                              'name' => $menu['icon'],
                              'style' => 'text-(--white-100) group-aria-checked:text-(--primary-900)',
                              'size' => 35
                           ]
                        )
                        ?>
                     </a>
                  </li>
               <?php endforeach ?>
            </ul>
         </nav>
      </div>
   </aside>
   <section class="flex-1">
      <div class="container mx-auto px-5 py-10">
         <div class="w-full flex justify-between items-center">
            <div>
               <h1 class="text-2xl text-(--gray-900)">Dashboard</h1>
            </div>
            <div class=""></div>
         </div>
      </div>
   </section>
</main>