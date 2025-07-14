<?php
$menus = [
   [
      'label' => 'Página Inicial',
      'url' => '/home'
   ],
   [
      'label' => 'Loja',
      'url' => '/loja'
   ],
   [
      'label' => 'Serviços',
      'url' => '/servicos'
   ],
   [
      'label' => 'Sobre',
      'url' => '/sobre'
   ]
];

$user_in_home_page = getRootRoute() === "/" || getRootRoute() === "home";
$menu_color = $user_in_home_page ? "text-(--primary-100)" : "text-(--primary-900)";
$menu_background_color = $user_in_home_page ? "bg-transparent" : "bg-(--white-100)";
$menu_border_bototm = $user_in_home_page ? "" : "shadow-sm";
?>

<header id="header-app" aria-checked="false" class="group <?= $menu_background_color ?>  aria-checked:bg-(--primary-200) w-full fixed z-(--z-index-900) aria-checked:shadow-sm duration-150">
   <nav class="container m-auto py-3 flex justify-between items-center h-23">
      <div class="">
         <a href="/" target="_self" rel="noopener noreferrer" class="block leading-14 text-xl px-3 font-medium <?= $menu_color ?> group-aria-checked:text-(--primary-900)"><?= $COMPANY_NAME ?></a>
      </div>
      <div class="hidden md:flex items-center gap-7">
         <ul class="flex gap-1">
            <?php foreach ($menus as $menu): ?>
               <li class="">
                  <a href="<?= $menu['url'] ?>" target="_self" rel="noopener noreferrer" class="group/item flex justify-center items-center flex-col">
                     <span class="block leading-12 px-5 font-medium <?= $menu_color ?> group-aria-checked:text-(--primary-700)"><?= $menu['label'] ?></span>
                     <span class="group-hover/item:w-full w-0 h-0.5 bg-(--primary-100) group-aria-checked:bg-(--primary-700) duration-300"></span>
                  </a>
               </li>
            <?php endforeach ?>
         </ul>
      </div>
      <div class="hidden md:flex items-center gap-7">
         <div class="relative" x-data="{ open: false }">
            <button type="button" class="px-3 py-1 rounded-sm" @click="open = !open">
               <?= IconifyComponent(['name' => 'uil:cart', 'style' => $menu_color]) ?>
            </button>
            <div class="absolute right-0 top-full bg-white shadow-(--box-shadow-50) rounded-xs min-w-92" x-show="open" @click.outside="open = false">
               <div class="flex items-center justify-between px-2 py-3">
                  <h1 class="text-lg font-medium">Carrinho (4)</h1>
                  <a href="/carrinho" target="_self" rel="noopener noreferrer" class="text-sm text-(--secondary-500) font-base">Ver todos</a>
               </div>
               <div class="block">
                  <hr class="border-(--gray-100)">
               </div>
               <ul class="h-92 divide-y-10 divide-transparent" role="list">
                  <li class="border-l-2 border-l-(--primary-700)" role="listitem">
                     <div href="#" target="_self" rel="noopener noreferrer" class="w-full min-h-32 px-4 py-2 bg-(--primary-100)">
                        <div class="w-full flex items-start gap-3 mb-3">
                           <div class="flex-none w-18 flex items-center justify-center bg-red-500 overflow-hidden rounded-sm">
                              <img
                                 class="aspect-1/1 object-cover"
                                 src="https://images.unsplash.com/photo-1705147293087-9e183bf149ef?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                 alt="">
                           </div>
                           <div class="flex-1">
                              <span class="block text-(--gray-500) text-sm">Camera</span>
                              <a href="/carrinho/xpto0494" class="block text-(--gray-900) text-lg font-base" target="_blank" rel="noopener noreferrer">
                                 Camera xpto modelo v5
                              </a>
                              <div class="block mb-5">
                                 <span class="bg-(--warning-500)/20 px-2 py-1 rounded-sm text-xs text-(--warning-500)">Desconto: 45%</span>
                              </div>
                              <div class="w-full flex justify-between items-center mt-3">
                                 <div class="flex items-center gap-2">
                                    <button type="button" class="flex-none flex items-center justify-center rounded-sm size-6 shadow-[0_0_1px_1px_rgba(51,51,51,0.08)]">
                                       <?= IconifyComponent(['name' => 'mynaui:minus', 'size' => 18]) ?>
                                    </button>
                                    <span class="w-16 size-6 flex items-center justify-center rounded-sm shadow-[0_0_1px_1px_rgba(51,51,51,0.08)]">8</span>
                                    <button type="button" class="flex-none flex items-center justify-center rounded-sm size-6 shadow-[0_0_1px_1px_rgba(51,51,51,0.08)]">
                                       <?= IconifyComponent(['name' => 'mynaui:plus', 'size' => 18]) ?>
                                    </button>
                                 </div>
                                 <div class="flex relative">
                                    <span class="aoa-format absolute -top-5 right-0 text-(--gray-500) text-xs font-medium">80</span>
                                    <span class="aoa-format text-md text-(--gray-900) font-medium">76</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="w-full flex justify-end gap-2">
                           <button class="text-(--gray-500) text-sm px-3">Adicionar aos favoritos</button>
                           <hr class="border-1 min-h-6 border-(--gray-500)">
                           <button class="text-(--gray-500) text-sm px-3 rounded-sm flex justify-center items-center">
                              <?= IconifyComponent(['name' => 'bytesize:trash', 'style' => 'text-(--gray-500)', 'size' => 18]) ?>
                           </button>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div>
            <a href="/login" target="_self" rel="noopener noreferrer" class="flex items-center justify-center border-2 border-(--primary-700) text-base text-(--white-100) size-12 overflow-hidden rounded-full p-0.5">
               <span class="bg-(--primary-700) rounded-full  w-full h-full flex items-center justify-center">U</span>
            </a>
         </div>
      </div>
      <div class="flex md:hidden">
         <button type="button" class="group/menu-burger peer flex items-center justify-center hover:bg-(--primary-200) duration-500 rounded-sm px-5 py-2">
            <?= IconifyComponent(
               [
                  'name' => 'hugeicons:menu-02',
                  'style' => $user_in_home_page ? 'text-(--primary-100) group-hover/menu-burger:text-(--white-900)' : 'text-(--primary-900) group-hover/menu-burger:text-(--primary-900)'
               ]
            )
            ?>
         </button>
         <div class="fixed bottom-0 duration-300 -left-84 peer-focus:translate-x-84 bg-(--primary-100) h-[calc(100%-92px)] w-82">
            <div class="w-full h-full flex items-start justify-center p-3">
               <div class="w-full h-full flex flex-col justify-between">
                  <ul class="flex flex-col gap-1">
                     <?php foreach ($menus as $menu): ?>
                        <li class="">
                           <a href="<?= $menu['url'] ?>" target="_self" rel="noopener noreferrer" class="group/item flex justify-center items-center flex-col">
                              <span class="block leading-12 px-5 font-medium group-aria-checked:text-(--primary-700)"><?= $menu['label'] ?></span>
                              <span class="group-hover/item:w-full w-0 h-0.5 bg-(--primary-100) group-aria-checked:bg-(--primary-700) duration-300"></span>
                           </a>
                        </li>
                     <?php endforeach ?>
                  </ul>
                  <div class="">
                     <a href="/login" target="_self" rel="noopener noreferrer" class="block leading-11 py-1 rounded-sm text-base bg-(--primary-700) text-(--white-100) text-center">
                        Login
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>
</header>