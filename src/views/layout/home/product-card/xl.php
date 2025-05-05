<?php

function porcentageDiscount(float $price, int $porcentage)
{
   $discount = $price * ($porcentage / 100);
   $save = $price - $discount;

   return $save;
}

function BestDeals_Xl_Component(array $props = [])
{
   $defaults = [
      'title' => 'Ofertas em Destaque',
      'price' => 25000,
      'discount_porcent' => 25,
      'rating' => 2,
      'reviews' => 5200,
      'max_items' => 4,
      'description' => 'Xbox Series S - 512GB SSD Console with Wireless Controller - EU Versio'
   ];
   $props = array_merge($defaults, $props);
   extract($props);

   $rating = StarRating_Component($props['rating']);
   $result_discount = porcentageDiscount($props['price'], $props['discount_porcent']);

   $html = <<<HTML
   <div class="max-w-96 border-1 border-(--gray-100) bg-white p-5">
      <div class="relative h-72 w-full flex items-start justify-center">
         <img 
            src="public/models/m1.png"
            alt=""
            class="w-full h-full object-cover"
         >
         <div class="absolute w-full">
            <div class="text-white text-lg w-fit rounded-sm px-3 py-1.5 bg-(--primary-500)">{$props['discount_porcent']}% Desconto</div>
         </div>
      </div>
      <div class="w-full py-3 flex items-center gap-1">
         $rating
         <span class="text-(--gray-500) text-md">({$props['reviews']})</span>
      </div>
      <div class="w-full py-2 max-h-50 overflow-hidden">
         <p class="text-xl text-(--gray-900)">{$props['title']}</p>
      </div>
      <div class="w-full py-2 block text-xl">
         <span class="line-through text-(--gray-300) font-light">{$props['price']} kz</span>
         <span class="text-(--secondary-500) font-medium ml-1">$result_discount kz</span>
      </div>
      <div class="w-full py-3 max-h-50 overflow-hidden">
         <p class="text-base text-(--gray-600) text-md">{$props['description']}</p>
      </div>
      <div class="pt-3 flex gap-3">
         <div class="flex-none">
            <button type="button" class="bg-(--primary-100) p-3 rounded-sm">
               <span class="iconify text-(--gray-900)" data-icon="solar:heart-linear" data-width="25" data-height="25"></span>
            </button>
         </div>
         <div class="flex-1">
            <button type="button" class="bg-(--primary-500) px-1 w-full h-full rounded-sm flex items-center justify-center gap-3">
               <span class="iconify text-white" data-icon="streamline:shopping-cart-1" data-width="20" data-height="20"></span>
               <span class="uppercase text-sm font-medium text-white">Adicionar ao carrinho</span>
            </button>
         </div>
         <div class="flex-none">
            <button type="button" class="bg-(--primary-100) p-3 rounded-sm">
               <span class="iconify text-(--gray-900)" data-icon="iconamoon:eye-light" data-width="25" data-height="25"></span>
            </button>
         </div>
      </div>
   HTML;

   return $html;
}
