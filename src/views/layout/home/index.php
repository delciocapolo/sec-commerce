<?php
global $COMPANY_NAME;

$service_list = [
   [
      'title' => 'Sistema de CCTV comercial & residencial',
      'description' => 'Proteja o seu negócio ou residência com soluções avançadas de CCTV de nível comercial.'
   ],
   [
      'title' => 'Detecção de incêndio e segurança',
      'description' => 'Mantenha-se protegido com sistemas inteligentes de detecção de incêndio projetados para alerta precoce e resposta rápida.'
   ],
   [
      'title' => 'Sistema de casa inteligente',
      'description' => 'Controle sua casa com facilidade usando nossas soluções inteligentes e conectadas.'
   ],
   [
      'title' => 'Acesso por impressão digital (por lançar)',
      'description' => 'Experimente uma entrada segura e sem chave com controle de acesso avançado por impressão digital.'
   ]
]
?>

<main class="w-full">
   <!-- HEADER -->
   <?= HeaderComponent(['style' => 'bg-black/35 backdrop-blur-sm']) ?>

   <!-- HOME -->
   <section id="header-homepage" class="bg-[url(/public/homepage-background.png)] bg-center bg-no-repeat bg-cover">
      <div class="container m-auto">
         <div class="w-full h-23"></div>
         <div class="relative w-full h-[calc(100vh-92px)] flex items-center">
            <div class="bg-(--primary-900)/50 w-3/5 min-h-1/2 rounded-lg px-10 py-12 flex flex-col justify-center gap-10">
               <h1 class="block text-(--white-100) text-5xl font-medium">
                  Monitore sua propriedade, <br> Treine connosco o seu pessoal, <br> E gerencie as suas câmeras
               </h1>
               <div class="">
                  <p class="block text-(--white-100) text-lg mb-3">Tenha controle da sua casa, empresa ou instituição e não deixe nada passar dispercebido.</p>
                  <p class="block text-(--white-100) text-lg">Atualize o seu local hoje. Experimente e <b>veja</b> a diferença.</p>
               </div>
               <div class="flex items-center gap-5">
                  <a href="/carrinho" target="_blank" rel="noopener noreferrer" class="bg-(--primary-500) px-5 py-3 rounded-sm text-lg font-medium text-(--white-100) capitalize">Comprar agora</a>
                  <a href="/productos" target="_blank" rel="noopener noreferrer" class="capitalize border border-(--white-100) px-5 py-3 rounded-sm text-lg font-medium text-(--white-100)">Ver productos</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- FEATURE -->
   <section class="">
      <div class="container m-auto">
         <div class="relative -top-32 w-full min-h-65 rounded-lg bg-(--primary-100) shadow-lg p-4 flex gap-10">
            <div class="flex-1 flex items-center justify-center flex-col">
               <div class="mb-3">
                  <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g clip-path="url(#clip0_53_103)">
                        <path d="M20 8V14C20 16.1217 19.1571 18.1566 17.6569 19.6569C16.1566 21.1571 14.1217 22 12 22C9.87827 22 7.84344 21.1571 6.34315 19.6569C4.84285 18.1566 4 16.1217 4 14V8H20ZM12 10C10.9693 10.0001 9.97839 10.398 9.23391 11.1108C8.48943 11.8236 8.04884 12.7963 8.004 13.826L8 14C8 14.7911 8.2346 15.5645 8.67412 16.2223C9.11365 16.8801 9.73836 17.3928 10.4693 17.6955C11.2002 17.9983 12.0044 18.0775 12.7804 17.9231C13.5563 17.7688 14.269 17.3878 14.8284 16.8284C15.3878 16.269 15.7688 15.5563 15.9231 14.7804C16.0775 14.0044 15.9983 13.2002 15.6955 12.4693C15.3928 11.7384 14.8801 11.1136 14.2223 10.6741C13.5645 10.2346 12.7911 10 12 10ZM12.01 13C12.2649 13.0003 12.51 13.0979 12.6954 13.2728C12.8807 13.4478 12.9922 13.687 13.0072 13.9414C13.0221 14.1958 12.9393 14.4464 12.7757 14.6418C12.6121 14.8373 12.3801 14.9629 12.127 14.993L12 15C11.7451 14.9997 11.5 14.9021 11.3146 14.7272C11.1293 14.5522 11.0178 14.313 11.0028 14.0586C10.9879 13.8042 11.0707 13.5536 11.2343 13.3582C11.3979 13.1627 11.6299 13.0371 11.883 13.007L12.01 13ZM2 5V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H20C20.5304 2 21.0391 2.21071 21.4142 2.58579C21.7893 2.96086 22 3.46957 22 4V5C22 5.53043 21.7893 6.03914 21.4142 6.41421C21.0391 6.78929 20.5304 7 20 7H4C3.46957 7 2.96086 6.78929 2.58579 6.41421C2.21071 6.03914 2 5.53043 2 5Z" fill="#488428" />
                     </g>
                     <defs>
                        <clipPath id="clip0_53_103">
                           <rect width="45" height="45" fill="white" />
                        </clipPath>
                     </defs>
                  </svg>
               </div>
               <div class="mb-3">
                  <h1 class="font-bold text-xl">Monitoramento e Controle</h1>
               </div>
               <div class="">
                  <p class="text-center">Vigiando a sua propriedade pessoal através de câmeras IP</p>
               </div>
            </div>

            <div class="flex-1 flex items-center justify-center flex-col">
               <div class="mb-3">
                  <svg width="35" height="35" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g clip-path="url(#clip0_53_119)">
                        <path d="M14.332 1.429L21.082 5.409C21.1487 5.449 21.2087 5.49333 21.262 5.542L21.271 5.55L21.377 5.625C21.7521 5.90595 22.0612 6.26537 22.283 6.67817C22.5048 7.09097 22.6338 7.54719 22.661 8.015L22.666 8.218V15.502C22.666 16.677 22.023 17.758 21.043 18.295L14.239 22.597C13.259 23.135 12.073 23.135 11.039 22.565L4.34402 18.328C3.83702 18.0502 3.41386 17.6415 3.11871 17.1444C2.82355 16.6473 2.66722 16.0801 2.66602 15.502V8.217C2.66556 7.64432 2.81832 7.08195 3.10845 6.5882C3.39858 6.09445 3.81551 5.68731 4.31602 5.409L11.091 1.414C11.588 1.14137 12.1461 0.999693 12.713 1.00232C13.2798 1.00494 13.8366 1.15178 14.331 1.429M13.691 6.772C13.3872 6.59721 13.0433 6.50405 12.6929 6.5016C12.3424 6.49915 11.9972 6.58748 11.691 6.758L8.66802 8.562C8.36234 8.73683 8.10852 8.98964 7.93249 9.29463C7.75645 9.59962 7.6645 9.94586 7.66602 10.298V13.576C7.66584 13.9331 7.76127 14.2837 7.9424 14.5914C8.12353 14.8992 8.38374 15.1528 8.69602 15.326L11.642 17.216C12.299 17.583 13.032 17.583 13.636 17.249L16.69 15.294C17.272 14.972 17.666 14.302 17.666 13.575V10.298L17.661 10.134C17.6401 9.86525 17.5652 9.60349 17.4406 9.36446C17.316 9.12542 17.1444 8.91403 16.936 8.743L16.844 8.673L16.788 8.626C16.7573 8.60284 16.7252 8.58147 16.692 8.562L13.691 6.772Z" fill="#488428" />
                     </g>
                     <defs>
                        <clipPath id="clip0_53_119">
                           <rect width="35" height="35" fill="white" transform="translate(0.666016)" />
                        </clipPath>
                     </defs>
                  </svg>
               </div>
               <div class="mb-3">
                  <h1 class="font-bold text-xl">Personalize suas necessidades</h1>
               </div>
               <div class="">
                  <p class="text-center">Recursos personalizados com base no que sua empresa precisa</p>
               </div>
            </div>

            <div class="flex-1 flex items-center justify-center flex-col">
               <div class="mb-3">
                  <?= IconifyComponent(['name' => 'mdi:support', 'size' => '40', 'style' => 'text-[#488428]']) ?>
               </div>
               <div class="mb-3">
                  <h1 class="font-bold text-xl">Suporte 24/7</h1>
               </div>
               <div class="">
                  <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- INTRODUCTION -->
   <section class="mb-40">
      <div class="container m-auto">
         <div class="w-2/3 mx-auto mb-16 text-center">
            <h6 class="font-bold text-md mb-3">Trazendo a nossa solução.</h6>
            <h1 class="font-medium text-4xl text-(--primary-900) mb-7">Capacite sua equipe principal e explore possibilidades ilimitadas</h1>
            <div class="flex items-center justify-center gap-2 mb-5">
               <?= IconifyComponent(['name' => 'lets-icons:check-fill', 'style' => 'text-(--primary-900)', 'size' => '30']) ?>
               <span class="text-(--gray-900) font-bold text-lg">Estamos constantemente adicionando novos recursos para mantê-lo à frente da curva.</span>
            </div>
            <div class="w-11/12 mx-auto"> <!-- w-4/5 -->
               <p class="text-(--gray-900) text-lg">Monitore sua propriedade, treine a equipe e gerencie os displays - tudo através da <?= $COMPANY_NAME ?>. Com IA de ponta e planos flexíveis, o Wolonote Improver se adapta às necessidades do seu negócio.</p>
            </div>
         </div>
         <div class="w-2/3 mx-auto">
            <div class="overflow-hidden rounded-lg border-2 border-(--gray-900) shadow-lg relative">
               <img
                  src="/public/team.png"
                  alt=""
                  class="aspect-3/2 object-cover">
               <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-(--gray-900)/50">
                  <button class="size-20 rounded-full bg-(--gray-900)/70 flex items-center justify-center">
                     <?= IconifyComponent(['name' => 'line-md:play-filled', 'style' => 'text-(--white-100)', 'size' => '50']) ?>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- SERVICES -->
   <section class="mb-40">
      <div class="container m-auto">
         <div class="w-full flex gap-16">
            <div class="flex-none w-96 flex items-center justify-center overflow-hidden rounded-lg">
               <img
                  src="/public/tungsten-rising-mUxzpzEntKo-unsplash.png"
                  alt=""
                  class="aspect-1/2 object-cover">
            </div>
            <div class="flex-1">
               <div class="mb-8">
                  <h1 class="font-medium text-xl mb-3">Descubra nossos serviços</h1>
                  <h2 class="font-bold text-(--primary-900) text-4xl w-1/2">Conheça nossos serviços e torne o seu espaço mais inteligente</h2>
               </div>
               <div class="">
                  <p class="text-lg">Os nossos serviços são tudo que precisa:</p>
                  <div class="w-full px-1 mb-12">
                     <? foreach ($service_list as $service_item): ?>
                        <div class="flex flex-nowrap gap-1 p-5 bg-(--primary-200) mt-5 rounded-lg">
                           <div class="w-8">
                              <?= IconifyComponent(['name' => 'lets-icons:check-fill', 'style' => 'text-(--primary-900)']) ?>
                           </div>
                           <div class="">
                              <h1 class="text-lg font-medium mb-3"><?= $service_item['title'] ?></h1>
                              <p class=""><?= $service_item['description'] ?> <a href="/servicos" target="_self" rel="noopener noreferrer" class="underline">Saber mais</a></p>
                           </div>
                        </div>
                     <? endforeach ?>
                  </div>
                  <a href="/servicos" target="_self" rel="noopener noreferrer" class="bg-(--primary-900) text-(--white-100) px-5 py-4 rounded-lg font-medium">Conhecer mais serviços</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- PRODUCTS -->
   <seection class="">
      <div class="container m-auto">
         <div class="w-full rounded-t-lg bg-(--primary-200) px-5 py-12">
            <div class="flex items-center flex-col gap-3">
               <h6 class="font-bold text-md">Encontre aqui os melhores equipamentos</h6>
               <h1 class="font-medium text-4xl text-(--primary-900) mb-7 capitalize">Descubra cada equipamento</h1>
            </div>
            <nav class="w-full flex flex-wrap gap-5 overflow-hidden">
               <?= CardProduct() ?>
               <?= CardProduct() ?>
               <?= CardProduct() ?>
               <?= CardProduct() ?>
               <?= CardProduct() ?>
               <?= CardProduct() ?>
            </nav>

         </div>
      </div>
   </seection>
   <section class="">
      <div class="w-full bg-(--primary-900) min-h-[260px]"></div>
   </section>
</main>