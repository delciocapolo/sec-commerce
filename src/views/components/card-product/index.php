<?php

function computeRating(int $reviews, int $totalStars, int $confidenceConstant = 10, float $globalAverageRating = 4.0): float
{
   if ($reviews > 0) {
      $rating = (($confidenceConstant * $globalAverageRating) + $totalStars) /
         ($confidenceConstant + $reviews);
      return round($rating, 1);
   }

   return $globalAverageRating;
}

function CardProduct(array $props = [])
{
   $defaults = [
      'image_path' => '/public/security-cameras-different-positions.png',
      'name' => 'Camera de vigilancia',
      'price' => 25000,
      'reviews' => 10,
      'totalStars' => 15,
      'tags' => [
         'Vigilância',
         'Monitoramento'
      ],
      'hover' => true
   ];

   $props = array_merge($defaults, $props);
   $tagsHtml = '';
   $hoverClass = $props['hover'] === true ? 'hover:scale-110' : '';
   $rating = computeRating($props['reviews'], $props['totalStars']);

   foreach ($props['tags'] as $tag) {
      $tagsHtml .= <<<HTML
         <span class="rounded-full mb-2 block px-4 py-0.5 text-(--primary-700) bg-(--primary-100) ring font-[450] text-center">{$tag}</span>
      HTML;
   }

   $template = <<<HTML
      <div class="group hover:p-2 {$hoverClass} hover:border border-(--gray-900) bg-(--white-100) rounded-sm min-w-xs max-h-[560px] duration-200 cursor-pointer overflow-hidden">
         <div class="w-full h-full rounded-md bg-(--primary-200) relative overflow-hidden">
            <div class="w-full h-full">
               <img 
                  src="{$props['image_path']}"
                  alt="" 
                  class="object-cover aspect-2/3"
               >
            </div>
            <div class="absolute bottom-0 left-0 w-full h-full grid grid-rows-2 p-3">
               <div class="flex justify-between w-full">
                  <p class="">
                     {$tagsHtml}
                  </p>
               </div>
               <div class="w-full h-full relative">
                  <div class="w-full h-fit absolute -bottom-18 group-hover:-translate-y-18 duration-300 group-hover:">
                     <div class="mb-5 border border-(--primary-700) w-full p-4 overflow-hidden rounded-lg bg-(--white-100) flex flex-col justify-start gap-1">
                        <div class="">
                           <h3 class="text-xl font-[450]">{$props['name']}</h3>
                        </div>
                        <div class="flex gap-1 items-end">
                           <span class="iconify text-[#F19915]" data-icon="ic:round-star" data-width="25" data-height="25"></span>
                           <span class="text-(--gray-900) text-md">{$rating}</span>
                           <span class="text-(--gray-400) text-md">({$props['reviews']} Avaliações)</span>
                        </div>
                        <div class="flex gap-3 items-center">
                           <h3 class="text-lg font-[450] aoa-format">{$props['price']}</h3>
                           <del class="text-md text-(--gray-400) aoa-format">30000</del>
                        </div>
                     </div>
                     <div class="w-full h-full relative">
                        <button type="button" class="flex items-center justify-center gap-2 w-full py-3 bg-(--primary-700) rounded-md text-(--white-100) text-lg">
                           <span class="iconify" data-icon="proicons:cart" data-width="25" data-height="25"></span>
                           Adicionar no carrinho
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   HTML;

   return $template;
}
