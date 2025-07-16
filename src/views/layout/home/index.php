<?php
global $COMPANY_NAME;

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

   <!-- SERVICES -->
   <section id="services" class="mt-24 px-3 py-10">
      <div class="container m-auto">
         <div class="">
            <?= TitleComponent(['title' => 'Nossos serviços', 'subtitle' => 'Alguns dos nossos serviços incluem.', 'url_section' => 'servicos']) ?>

            <nav class="grid grid-cols-1 md:grid-cols-[repeat(auto-fit,minmax(180px,1fr))] gap-4 md:gap-10 my-8 min-h-62">
               <?php foreach ($services as $service): ?>
                  <div class="flex flex-col justify-center p-5 w-full rounded-sm shadow-(--box-shadow-50)">
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

   <!-- ADS BOARD -->
   <section class="mt-24 px-3">
      <div class="container m-auto overflow-hidden rounded-sm">
         <video class="w-full bg-(--primary-300)" controls>
            <source src="/public/barner.mp4" type="video/mp4">
            Your browser does not support HTML video.
         </video>
      </div>
   </section>

   <!-- PRODUCTS -->
   <section id="products" class="mt-24 px-3">
      <div class="container m-auto">
         <div class="">
            <?= TitleComponent(['title' => 'Conheça nossos produtos', 'subtitle' => 'Confira alguns dos melhores produtos.', 'url_section' => 'loja']) ?>
            <nav class="flex flex-wrap my-8 gap-5">
               <div class="flex-1 flex items-end lg:max-w-[30.35rem] min-w-sx h-[35rem] bg-(--primary-100) rounded-sm p-7 relative bg-[url(https://images.unsplash.com/photo-1706454566473-d5ca521ea8cb?q=80&w=3542&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-center bg-no-repeat bg-cover shadow-sm">
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
               <nav class="flex-1 min-w-sx grid sm:grid-cols-2 md:grid-cols-3 gap-5" role="list">
                  <?= CardProduct(['hover' => false, 'price' => 325000, 'reviews' => 25, 'totalStars' => 100]) ?>
                  <?= CardProduct(['hover' => false]) ?>
                  <?= CardProduct(['hover' => false]) ?>
               </nav>
            </nav>
         </div>
      </div>
   </section>

   <!-- ABOUT -->
   <section id="about" class="mt-24 px-3 py-10">
      <div class="container m-auto">
         <div class="">
            <div class="my-8 flex flex-wrap gap-15 px-12">
               <div class="flex-1 rounded-sm overflow-hidden min-w-xs h-fit">
                  <img
                     src="/public/team.png"
                     alt=""
                     class="object-cover aspect-2/1 rounded-sm">
               </div>
               <div class="flex-1 flex flex-col gap-3 text-justify">
                  <div class="">
                     <h1 class="leading-10 mb-3 font-bold text-3xl capitalize text-(--primary-900)">Quem somos</h1>
                     <p class="text-(--gray-800) text-md text-justify">Na <?= $COMPANY_NAME ?> acreditamos que a proteção do seu patrimônio e da sua família não deve ser complicada nem inacessível. Somos uma empresa nova no mercado, mas trazemos connosco uma missão clara: oferecer soluções confiáveis, acessíveis e modernas em dispositivos de segurança para residências, empresas e espaços comerciais.
                        Trabalhamos com equipamentos de alta qualidade — como câmeras de vigilância, alarmes, sensores de movimento e fechaduras eletrônicas — sempre com foco no que mais importa: a sua tranquilidade. Nosso compromisso é ser mais do que apenas um fornecedor.
                     </p>
                     <br>
                     <p class="text-(--gray-800) text-md text-justify">
                        Queremos ser o seu parceiro na construção de um ambiente seguro, com atendimento próximo, transparente e orientado para a confiança. Começamos pequenos, mas com grandes objetivos e a dedicação de quem sabe que segurança é coisa séria.
                     </p>
                  </div>
                  <div class="my-3">
                     <a href="/sobre" target="_self" rel="noopener noreferrer" class="flex items-center gap-1 hover:gap-3 duration-300 leading-11 pr-5 rounded-sm text-(--primary-900) w-fit">
                        <span class="text-base font-medium">Ver mais</span>
                        <span class="iconify" data-icon="mynaui:arrow-right" data-width="30" data-height="30"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="news-letter" class="mt-24 px-3">
      <div class="container m-auto">
         <h1 class="block text-center text-2xl text-(--primary-900) font-medium">Receba notícia sobre as novidades</h1>
         <p class="block text-center text-md font-base">Fique por dentro das últimas novidades em segurança e proteja o que mais importa com dicas, ofertas e lançamentos exclusivos.</p>
         <div class="w-3/4 m-auto mt-10">
            <div class="flex items-center">
               <div class="flex-none size-16 overflow-hidden rounded-l-lg bg-(--primary-900)">
                  <label for="" class="flex items-center justify-center w-full h-full">
                     <?= IconifyComponent(['name' => 'streamline:send-email-remix', 'style' => 'text-(--white-100)']) ?>
                  </label>
               </div>
               <div class="flex-1 h-full rounded-r-lg overflow-hidden">
                  <input type="text" name="" id="" class="w-full h-16 px-3 text-md font-medium bg-(--primary-200) " placeholder="Seu Email">
               </div>
            </div>
         </div>
      </div>
   </section>
</main>