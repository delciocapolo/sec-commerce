<?php

function TitleComponent(array $props = []): string
{
   $defaults = [
      'title' => '',
      'subtitle' => '',
      'url_section' => '',
      'style' => ''
   ];

   $props = array_merge($defaults, $props);

   return <<<HTML
      <div class="flex justify-between flex-wrap {$props['style']}">
         <div class="">
            <h1 class="leading-10 my-1 font-bold text-3xl capitalize text-(--primary-900)">{$props['title']}</h1>
            <?php if (!empty({$props['subtitle']})): ?>
               <p class="text-md text-(--gray-600)">{$props['subtitle']}</p>
            <?php endif ?>
         </div>
         <div class="my-3">
            <a href="{$props['url_section']}" target="_self" rel="noopener noreferrer" class="flex items-center gap-1 hover:gap-3 duration-300 leading-11 pr-5 rounded-sm text-(--primary-900)">
               <span class="text-base font-medium">Ver mais</span>
               <span class="iconify" data-icon="mynaui:arrow-right" data-width="30" data-height="30"></span>
            </a>
         </div>
      </div>
   HTML;
}
