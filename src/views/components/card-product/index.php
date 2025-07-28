<?php

/**
 * Product Card Component
 *
 * @param array{name:string,image_path:string,price:int,description:string} $props
 * @return void
 */
function CardProduct(array $props = [])
{
   $defaults = [
      'name' => 'Camera de vigilancia',
      'image_path' => '/public/security-cameras-different-positions.png',
      'price' => 25000,
      'description' => ''
   ];

   $props = array_merge($defaults, $props);

   return <<<HTML
      <div class="group flex-1 flex min-h-52 min-w-md max-w-lg overflow-hidden rounded-sm border-2 border-(--primary-900) bg-(--white-100)">
         <div class="flex-1 flex items-center justify-center overflow-hidden">
            <div class=" rounded-lg overflow-hidden p-5 flex items-center justify-center bg-[#F8F9FA]">
               <img 
                  src="/public/products/1.png" 
                  alt="Product {$props['name']}" 
                  class="aspect-1/1 object-cover">
            </div>
         </div>
         <div class="flex-1">
            <div class="w-full h-full flex flex-col justify-center items-start gap-1 relative">
               <span class=""><b>Nome do producto:</b> DS-2CD2H23G2-IZS</span>
               <div class="flex items-center justify-center gap-1">
                  <b class="">Preço:</b>
                  <span class="aoa-format">25000</span>
               </div>
               <span class=""><b>Descrição do producto:</b> 2MP, Motorized Varifocal Lens</span>
               <div class="absolute -bottom-10 right-3 group-hover:-translate-y-12 duration-300">
                  <button class="bg-(--primary-900) text-(--white-100) font-medium px-3 py-2 rounded-sm">Ver agora</button>
               </div>
            </div>
         </div>
      </div>
   HTML;
}
