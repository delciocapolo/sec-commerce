<?php

require BASE_PATH . "/src/views/helpers/User.php";

/**
 * Header Component
 *
 * @param array{style:string} $props
 * @return void
 */
function HeaderComponent(array $props = [])
{
   global $COMPANY_NAME;

   $defaults = [
      'style' => ''
   ];

   $props = array_merge($defaults, $props);

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

   $menusHtml = '';
   $buttonProfile = AuthRenderHandler::buttonUserProfileOrLogin();

   foreach ($menus as $menu) {
      $menusHtml .= <<<HTML
         <li class="">
            <a href="{$menu['url']}" target="_self" rel="noopener noreferrer" class="hover:bg-(--primary-300) hover:text-(--gray-900) text-(--white-100) font-medium duration-300 px-4 py-3 rounded-sm">{$menu['label']}</a>
         </li>
      HTML;
   }

   return <<<HTML
      <header id="header-app" aria-checked="false" class="group w-full fixed z-(--z-index-900) aria-checked:bg-(--gray-900) aria-checked:shadow-sm duration-150 {$props['style']}">
         <nav class="container m-auto py-3 h-23">
            <div class="w-full h-full flex items-center justify-between">
               <div class="">
                  <a href="/" target="_self" rel="noopener noreferrer" class="block leading-14 text-xl px-3 font-medium text-(--white-100)">{$COMPANY_NAME}</a>
               </div>
               <div class="hidden md:flex items-center gap-7">
                  <ul class="flex gap-2">
                     {$menusHtml}
                  </ul>
               </div>
               <div class="">
                  {$buttonProfile}
               </div>
            </div>
         </nav>
      </header>
   HTML;
}
