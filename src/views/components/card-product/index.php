<?php

function CardProduct(array $props = [])
{
   $defaults = [
      'image_path' => '',
      'name' => 'Camera de vigilancia',
      'price' => 10,
      'tags' => [
         'casa',
         'seguranca'
      ]
   ];

   $props = array_merge($defaults, $props);
   extract($props);

   $tagsHtml = '';
   foreach ($props['tags'] as $tag) {
      $tagsHtml .= <<<HTML
         <span class="bg-(--primary-900) px-1 py-0.5 rounded-sm text-(--gray-100)">
               {$tag}
         </span>
      HTML;
   }

   $template = <<<HTML
      <div class="rounded-sm min-w-xs max-h-[350px]" role="listitem">
         <div class="h-4/5 bg-(--gray-50) rounded-sm flex items-center justify-center">
            <img 
               src="{$props['image_path']}" 
               alt=""
               class="object-cover"
            >
         </div>
         <div class="flex flex-col justify-between h-[calc(100%-80%)] pt-3">
            <div class="flex justify-between items-center w-full">
               <div>
                  <h1 class="font-bold text-lg">{$props['name']}</h1>
               </div>
               <div class="flex gap-2">
                  {$tagsHtml}
               </div>
            </div>
            <div class="">
               <span class="aoa-format font-medium text-(--gray-600)">{$props['price']}</span>
            </div>
         </div>
      </div>
   HTML;

   return $template;
}
