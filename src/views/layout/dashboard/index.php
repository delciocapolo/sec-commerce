<?php
// parse_str($_SERVER['QUERY_STRING'], $current_query);

$header_aside_width = "w-26";
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

$seeder = ["Receita", "Pedidos", "Visitas", "Conversão"];

$SIDEBAR_MENU = array_map(function ($array) {
   $array['current'] = str_ends_with($array['url'], getRootRoute()) ? 'true' : 'false';
   return $array;
}, $SIDEBAR_MENU);
?>

<main class="flex">
   <aside class="flex-none min-h-screen <?= $header_aside_width ?>">
      <div class=" top-0 left-0 min-h-screen <?= $header_aside_width ?> py-10 bg-(--primary-900)">
         <nav class="w-fit mx-auto">
            <div class="">
               <h1 class="text-2xl font-bold text-(--white-100) text-center">M&S</h1>
            </div>
            <ul class="mt-10" role="list">
               <?php foreach ($SIDEBAR_MENU as $menu): ?>
                  <li class="not-last-of-type:mb-7">
                     <a href="<?= $menu['url'] ?>" aria-checked="<?= $menu['current'] ?>" target="_self" rel="noopener noreferrer" class=" group px-1 py-3 bg-(--white-100)/40 rounded-lg flex items-center justify-center aria-checked:bg-(--white-100)">
                        <?= IconifyComponent(
                           [
                              'name' => $menu['icon'],
                              'style' => 'text-(--white-100) group-aria-checked:text-(--primary-900)',
                              'size' => 25
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
         <div class="w-full flex justify-between items-center mb-3">
            <div>
               <h1 class="text-2xl text-(--gray-900)">Dashboard</h1>
            </div>
            <div class="">
            </div>
         </div>
         <nav class="flex flex-wrap gap-x-10 gap-y-3 w-full">
            <? foreach ($seeder as $value): ?>
               <div class="flex-1 min-w-[260px] h-[95px] flex justify-between items-center gap-5 p-4 rounded-md bg-(--primary-100) shadow-[0_0_1px_rgba(0,0,0,0.5),0_0_25px_rgba(0,0,0,0.15)] overflow-hidden">
                  <div class="">
                     <h2 class="block font-medium text-sm text-(--gray-500) mb-1 capitalize"><?= $value ?></h2>
                     <span class="aoa-format block text-xl font-bold text-(--primary-900)">2500</span>
                  </div>
                  <div class=""></div>
               </div>
            <? endforeach ?>
         </nav>
      </div>
   </section>
</main>