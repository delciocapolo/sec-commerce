<?php
$social_media = [
   [
      'icon' => 'ic:round-facebook',
      'url' => 'https://facebook.com/mateus_seguranca',
      'label' => 'Facebook'
   ],
   [
      'icon' => 'hugeicons:instagram',
      'url' => 'https://instagram.com/mateus_seguranca',
      'label' => 'Instagram'
   ],
   [
      'icon' => 'hugeicons:new-twitter',
      'url' => 'https://x.com/mateus_seguranca',
      'label' => 'Twitter'
   ]
];

$supports = [
   [
      'url' => '/contactar-nos',
      'label' => 'Contactar-nos'
   ],
   [
      'url' => '/faq',
      'label' => 'Perguntas Frequentes'
   ]
];

$quickMenu = [
   [
      'url' => '',
      'label' => ''
   ]
];

$footer_contacts = [
   [
      'url' => 'https://g.co/kgs/aQmU7qX',
      'label' => 'Luanda, Viana - Grafanil',
      'icon' => 'carbon:location'
   ],
   [
      'url' => "tel:+{$COMPANY_CONTACT}",
      'label' => "+{$COMPANY_CONTACT}",
      'icon' => 'ion:call-outline'
   ],
   [
      'url' => "mailto:{$COMPANY_EMAIL}",
      'label' => "{$COMPANY_EMAIL}",
      'icon' => 'fluent:mail-20-regular'
   ]
]
?>

<footer class="w-full bg-(--primary-900) mt-12 px-3 py-5">
   <div class="container m-auto">
      <div class="flex flex-wrap mb-8">
         <div class="flex-1 min-w-xs md:mb-8">
            <h1 class="mb-2 text-(--white-100) text-2xl font-medium"><?= $COMPANY_NAME ?></h1>
            <p class="text-(--gray-300) text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro natus autem, ad numquam quasi veritatis eos aliquid voluptas voluptatum provident quaerat at animi perspiciatis quibusdam velit id! Mollitia, necessitatibus corrupti.</p>
         </div>
         <div class="flex-1 min-w-xs">
            <ul class="flex justify-start md:justify-end gap-3" role="list">
               <?php foreach ($social_media as $media): ?>
                  <li class="group" role="listitem">
                     <a href="<?= $media['url'] ?>" target="_blank" rel="noopener noreferrer" class="py-2 px-2 rounded-sm flex justify-center items-center group-hover:bg-(--primary-800) duration-300">
                        <span class="iconify text-(--white-100)" data-icon="<?= $media['icon'] ?>" data-width="30" data-height="30"></span>
                     </a>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>
      </div>
      <div class="mb-8">
         <hr class="text-(--gray-500)/60">
      </div>
      <div class="flex flex-wrap mb-8">
         <div class="flex-1 min-w-xs">
            <ul class="" role="list"></ul>
            <?php foreach ($footer_contacts as $footer_contact): ?>
               <li class="w-fit not-first-of-type:mt-1" role="listitem">
                  <a href="<?= $footer_contact['url'] ?>" target="_self" rel="noopener noreferrer" class="flex items-center gap-3 leading-12 pr-5">
                     <span class="iconify text-(--gray-100)" data-icon="<?= $footer_contact['icon'] ?>" data-width="26" data-height="26"></span>
                     <span class="text-(--gray-100)"><?= $footer_contact['label'] ?></span>
                  </a>
               </li>
            <?php endforeach; ?>
         </div>
         <div class="flex-1 min-w-xs">
            <div class="w-full flex flex-wrap">
               <div class="flex-1">
                  <div>
                     <h1 class="block uppercase text-md font-medium text-(--white-100)">Menu rápido</h1>
                  </div>
                  <ul role="list">
                     <?php foreach ($quickMenu as $q_menu): ?>
                        <li class="not-last-of-type:not-first-of-type:my-3 first-of-type:mt-3" role="listitem">
                           <a href="<?= $q_menu['url'] ?>" target="_self" rel="noopener noreferrer" class="block leading-10 text-md text-(--primary-300)"><?= $q_menu['label'] ?></a>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
               <div class="flex-1">
                  <div>
                     <h1 class="block uppercase text-md font-medium text-(--primary-100)">Suporte</h1>
                  </div>
                  <ul role="list">
                     <?php foreach ($supports as $support): ?>
                        <li class="not-last-of-type:not-first-of-type:my-3 first-of-type:mt-3" role="listitem">
                           <a href="<?= $support['url'] ?>" target="_self" rel="noopener noreferrer" class="block leading-10 text-md text-(--primary-300)"><?= $support['label'] ?></a>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="mb-8">
         <hr class="text-(--gray-500)/60">
      </div>
      <div class="w-full flex justify-between">
         <div>
            <p class="text-(--primary-200) text-sm font-light">&copy;<?= $COMPANY_NAME ?> - <?= date("Y"); ?>. Todos os direitos reservados.</p>
         </div>
         <div class="text-(--primary-200) text-sm font-light">
            <a href="/terms" target="_self" rel="noopener noreferrer">Termos & Condições</a>
            <span> | </span>
            <a href="/terms" target="_self" rel="noopener noreferrer">Políticas de Privacidade</a>
         </div>
      </div>
   </div>
</footer>