<?php
$menus_header = [
   [
      'label' => 'Quem somos',
      'url' => '#about'
   ],
   [
      'label' => 'Nossos Serviços',
      'url' => '#services'
   ],
   [
      'label' => 'Nossos Produtos',
      'url' => '#products'
   ]
];

$services = [
   [
      'label' => 'Instalação de câmera',
      'description' => 'Sempre trabalhando para lhe oferecer o melhor da sua vida.',
      'icon' => 'material-symbols:speed-camera-outline'
   ],
   [
      'label' => 'Manutenção & instalação de Cerca Elétrica',
      'description' => 'Instalação e manutenção para sua segurança.',
      'icon' => 'mdi:fence-electric'
   ],
   [
      'label' => 'Instalação de sistema de alarme inteligente',
      'description' => 'Receba notifição sempre que a sua privacidade for ameaçada.',
      'icon' => 'icon-park-outline:alarm'
   ]
];
?>

<main class="w-full">
   <!-- HEADER -->
   <section id="header-homepage" class="bg-[url(https://images.unsplash.com/photo-1630241772217-5d4926c594cc?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-center bg-no-repeat bg-cover">
      <header class="w-full h-23 bg-black/35"></header>
      <div class="relative w-full h-[calc(100vh-92px)]">
         <div class="absolute top-0 left-0 w-full h-full bg-black/35"></div>
         <div class="absolute top-0 left-0 w-full h-full z-10">
            <div class="container h-full m-auto relative">
               <ul class="flex justify-between absolute bottom-0 w-full py-5 border-t-1 border-(--white-100)">
                  <?php foreach ($menus_header as $menu): ?>
                     <li class="group">
                        <a href="<?= $menu['url'] ?>" target="_self" rel="noopener noreferrer" class="block leading-13 text-lg px-5 text-(--white-100) group-hover:bg-(--white-100) group-hover:text-(--primary-900) rounded-sm">
                           <?= $menu['label'] ?>
                        </a>
                     </li>
                  <?php endforeach ?>
               </ul>
            </div>
         </div>
      </div>
   </section>

   <!-- ABOUT -->
   <section id="about" class="mt-24">
      <div class="container m-auto">
         <div class="">
            <?= TitleComponent(['title' => 'Quem somos', 'subtitle' => 'Saiba sobre os nossos valores e o propósito de existirmos.', 'url_section' => 'sobre']) ?>
            <div class="my-8 flex flex-wrap gap-7">
               <div class="flex-1 p-0.5 rounded-sm border-4 border-double border-(--gray-300) h-fit">
                  <img
                     src="https://images.unsplash.com/photo-1617897711385-df9c86b7dfe3?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                     alt=""
                     class="object-cover rounded-sm">
               </div>
               <div class="flex-1 text-justify">
                  <p class="text-(--gray-800) text-base ">Na Mateus & Segurança, acreditamos que a proteção do seu patrimônio e da sua família não deve ser complicada nem inacessível. Somos uma empresa nova no mercado, mas trazemos connosco uma missão clara: oferecer soluções confiáveis, acessíveis e modernas em dispositivos de segurança para residências, empresas e espaços comerciais.</p>
                  <p class="text-(--gray-800) text-base mt-5">Trabalhamos com equipamentos de alta qualidade — como câmeras de vigilância, alarmes, sensores de movimento e fechaduras eletrônicas — sempre com foco no que mais importa: a sua tranquilidade.</p>
                  <p class="text-(--gray-800) text-base mt-5">Nosso compromisso é ser mais do que apenas um fornecedor. Queremos ser o seu parceiro na construção de um ambiente seguro, com atendimento próximo, transparente e orientado para a confiança. Começamos pequenos, mas com grandes objetivos e a dedicação de quem sabe que segurança é coisa séria.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- SERVICES -->
   <section id="services" class="mt-24">
      <div class="container m-auto">
         <div class="">
            <?= TitleComponent(['title' => 'Nossos serviços', 'subtitle' => 'Alguns dos nossos serviços incluem.']) ?>
            <nav class="grid grid-cols-1 md:grid-cols-[repeat(auto-fit,minmax(180px,1fr))] gap-4 md:gap-10 my-8 h-62">
               <?php foreach ($services as $service): ?>
                  <div class="flex flex-col justify-between p-5 w-full rounded-sm shadow-(--box-shadow-50)">
                     <div class="h-1/2 flex items-center justify-center">
                        <span class="iconify text-(--gray-700)" data-icon="<?= $service['icon'] ?>" data-width="65" data-height="65"></span>
                     </div>
                     <div class="text-center">
                        <h1 class="block mt-2 md:mt-4 mb-1 md:mb-2 font-semibold text-base md:text-[1.15rem] text-(--gray-900)"><?= $service['label'] ?></h1>
                        <p class="block text-xs md:text-sm text-(--gray-600)"><?= $service['description'] ?></p>
                     </div>
                  </div>
               <?php endforeach ?>
            </nav>
         </div>
      </div>
   </section>

   <!-- PRODUCTS -->
   <section id="products" class="mt-24">
      <div class="container m-auto">
         <div class="">
            <?= TitleComponent(['title' => 'Conheça nossos produtos', 'subtitle' => 'Confira alguns dos melhores produtos.']) ?>
            <nav class="flex flex-wrap my-8 h-[35rem] gap-5">
               <div class="flex-1 flex items-end lg:max-w-[30.35rem] min-w-sm h-full bg-(--primary-100) rounded-sm p-7 relative bg-[url(https://images.unsplash.com/photo-1706454566473-d5ca521ea8cb?q=80&w=3542&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-center bg-no-repeat bg-cover shadow-sm">
                  <div class="flex flex-col justify-between w-full min-h-1/2 bg-(--primary-200) rounded-sm p-5">
                     <div class="">
                        <h1 class="text-[1.55rem] leading-8 mb-2 text-(--primary-900) font-bold">A sua segurança, nossa prioridade.</h1>
                        <p class="text-sm text-(--gray-600)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus in odio eum repudiandae hic rem. Minus in odio eum repudiandae hic rem.</p>
                     </div>
                     <div class="inline-flex">
                        <a href="/products" target="_self" rel="noopener noreferrer" class="rounded-sm px-5 py-3 text-(--white-100) bg-(--primary-900)">Explorar</a>
                     </div>
                  </div>
               </div>
               <nav class="flex-1 min-w-sm grid grid-cols-3 gap-5" role="list">
                  <?= CardProduct() ?>
                  <?= CardProduct() ?>
                  <?= CardProduct() ?>
                  <?= CardProduct() ?>
                  <?= CardProduct() ?>
                  <?= CardProduct() ?>
               </nav>
            </nav>
         </div>
      </div>
   </section>
</main>