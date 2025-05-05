<?php
$menus = [
   [
      'label' => 'Página Inicial',
      'url' => '/home'
   ],
   [
      'label' => 'Loja',
      'url' => '/shop'
   ],
   [
      'label' => 'Serviços',
      'url' => '/services'
   ],
   [
      'label' => 'Sobre',
      'url' => '/sobre'
   ]
];
?>

<header id="header-app" aria-checked="false" class="group aria-checked:bg-(--primary-200) w-full fixed z-(--z-index-900) aria-checked:shadow-sm duration-150">
   <nav class="container m-auto py-3 flex justify-between items-center h-23">
      <div class="">
         <a href="/" target="_self" rel="noopener noreferrer" class="block leading-14 text-xl px-3 font-medium text-(--primary-100) group-aria-checked:text-(--primary-900)"><?= $COMPANY_NAME ?></a>
      </div>
      <div class="flex items-center gap-7">
         <ul class="flex gap-1">
            <?php foreach ($menus as $menu): ?>
               <li class="">
                  <a href="<?= $menu['url'] ?>" target="_self" rel="noopener noreferrer" class="group/item flex justify-center items-center flex-col">
                     <span class="block leading-12 px-5 font-medium text-(--primary-100) group-aria-checked:text-(--primary-700)"><?= $menu['label'] ?></span>
                     <span class="group-hover/item:w-full w-0 h-0.5 bg-(--primary-100) group-aria-checked:bg-(--primary-700) duration-300"></span>
                  </a>
               </li>
            <?php endforeach ?>
         </ul>
         <div class="">
            <a href="/login" target="_self" rel="noopener noreferrer" class="block leading-11 px-7 rounded-sm text-base bg-(--primary-700) text-(--white-100)">
               Login
            </a>
         </div>
      </div>
   </nav>
</header>