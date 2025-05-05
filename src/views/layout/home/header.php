<?php
$cell = '244993895962';
$menus = [
   // 'cameras' => [
   //    'url' => '#',
   //    'label' => 'Sistemas de Câmeras e Vigilância',
   //    'submenu' => [
   //       'Alarmes Residenciais e Comerciais',
   //       'Sensores de Porta/Janela',
   //       'Sirenes e Alertas Sonoros'
   //    ]
   // ],
   'sensors' => [
      'url' => '/product/sensor',
      'label' => 'Sensor de movimento',
      'submenu' => null
   ],
   'name' => [
      'url' => '/product/sensor',
      'label' => 'Sensor de movimento',
      'submenu' => null
   ],
   'name1' => [
      'url' => '/product/sensor',
      'label' => 'Sensor de movimento',
      'submenu' => null
   ],
   'namwe' => [
      'url' => '/product/sensor',
      'label' => 'Sensor de movimento',
      'submenu' => null
   ],
   'nam2e' => [
      'url' => '/product/sensor',
      'label' => 'Sensor de movimento',
      'submenu' => null
   ],
   'nam3e' => [
      'url' => '/product/sensor',
      'label' => 'Sensor de movimento',
      'submenu' => null
   ],
];
?>

<header class="w-full py-5 flex justify-between items-center z-(--z-index-900)">
   <nav class="h-full flex items-center gap-5">
      <div class="relative h-full" x-data="{ open: false }">
         <button
            type="button"
            class="group flex justify-center items-center gap-2 h-full bg-(--gray-50) py-3 px-5 rounded-sm focus:bg-(--primary-500) focus:text-white"
            @click="open = ! open">
            <span class="text-base text-(--gray-900) group-focus:text-white">Todas Categorias</span>
            <span class="iconify text-(--gray-900) group-focus:text-white" data-icon="iconamoon:arrow-up-2-light" data-width="30" data-height="30" x-show="open"></span>
            <span class="iconify text-(--gray-900) group-focus:text-white" data-icon="iconamoon:arrow-down-2-light" data-width="30" data-height="30" x-show="! open"></span>
         </button>
         <div class="absolute left-0 -bottom-[calc(100%+275px)] bg-white shadow-(--box-shadow-50) rounded-xs" x-show="open" @click.outside="open = false">
            <ul class="w-full">
               <?php foreach ($menus as $category): ?>
                  <li class="group block not-last-of-type:mb-0 hover:bg-(--gray-50)">
                     <a href="<?= $category['url'] ?>" target="_self" rel="noopener noreferrer" class="block leading-13 px-5 text-(--gray-600) group-hover:text-(--gray-900)">
                        <?= $category['label'] ?>
                     </a>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>
      </div>
      <div class="flex items-center gap-2">
         <span class="iconify text-(--gray-600)" data-icon="hugeicons:calling-02" data-width="27" data-height="27"></span>
         <span class="text-(--gray-600)">Suporte ao Cliente</span>
      </div>
      <div class="">
         <a href="/help/faq" target="_parent" rel="noopener noreferrer" class="flex items-center gap-2 text-(--gray-600) leading-12 px-3">
            <span class="iconify" data-icon="simple-line-icons:exclamation" data-width="25" data-height="25"></span>
            <span class="">Precisa de ajuda</span>
         </a>
      </div>
   </nav>
   <div class="">
      <a href="tel:+<?= $cell ?>" class="font-base text-lg flex justify-center items-center gap-3 leading-12 px-3">
         <span class="iconify text-(--gray-900) group-focus:text-white" data-icon="hugeicons:calling-02" data-width="27" data-height="27"></span>
         <span class="">+<?= $cell ?></span>
      </a>
   </div>
</header>