<?php
$cards_about = [
   [
      'value' => '+3',
      'label' => 'Anos de Experiência'
   ],
   [
      'value' => '+78',
      'label' => 'Projectos Resolvidos'
   ],
   [
      'value' => '+830',
      'label' => 'Avaliações Positivas'
   ],
   [
      'value' => '+35',
      'label' => 'Clientes Satisfeitos'
   ]
];

$team_member = [
   [
      'name' => 'Adão Cabila',
      'role' => 'Desenvolvedor Fullstack',
      'image' => 'https://scontent.flad4-1.fna.fbcdn.net/v/t39.30808-6/461896642_2396659427336931_807557863395107608_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEBLXxbAfJIzr82fPTMxLATbSFPKGtNg7FtIU8oa02Dsc1yB0E52NqJxK6RkO9Sn9ni60oOsbaJk6BO-TmV7Hci&_nc_ohc=5MogDa3aZjwQ7kNvwF_aURH&_nc_oc=Adn9JzBhIYfjO1zhldeKMVJF3pX8IdGb7PQYQq-0jPMlWC30-n68Klu8q5FIqIiX27ZrlXsvcaRpRMVkp6y2yvFS&_nc_zt=23&_nc_ht=scontent.flad4-1.fna&_nc_gid=aU6Wr_51LyXVsP4kkKBDBA&oh=00_AfN8yrycyD4-kKc2WCNsyHo5v2tq3R9m-3LHZqzr68enUw&oe=685168EB',
      'icon' => 'ri:facebook-fill', // 'ri:linkedin-fill',
      'profile_url' => 'https://www.facebook.com/adao.leonardolemba'
   ],
   [
      'name' => 'Maria Silva',
      'role' => 'Gerente de Projetos',
      'image' => '', // https://images.unsplash.com/photo-1599566150163-29194dcaad36?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
      'icon' => 'radix-icons:value-none',
      'profile_url' => ''
   ],
   // [
   //    'name' => 'João Pereira',
   //    'role' => 'Especialista em Segurança',
   //    'image' => '',
   //    'icon' => 'radix-icons:value-none',
   //    'profile_url' => ''
   // ],
   // [
   //    'name' => 'Ana Costa',
   //    'role' => 'Designer Gráfico',
   //    'image' => '',
   //    'icon' => 'radix-icons:value-none',
   //    'profile_url' => ''
   // ],
   // [
   //    'name' => 'Carlos Mendes',
   //    'role' => 'Técnico de Instalação',
   //    'image' => '',
   //    'icon' => 'radix-icons:value-none',
   //    'profile_url' => ''
   // ],
   // [
   //    'name' => 'Sofia Almeida',
   //    'role' => 'Analista de Marketing',
   //    'image' => '',
   //    'icon' => 'radix-icons:value-none',
   //    'profile_url' => ''
   // ]
];
?>

<main class="p-3">
   <!-- HERO -->
   <section class="mb-10" id="header-homepage">
      <header class="w-full h-23"></header>
      <div class="relative min-h-[calc(100vh-92px)]">
         <div class="container m-auto h-full">
            <div class="flex flex-wrap w-full h-full gap-5 py-10">
               <div class="flex-1 min-w-sm">
                  <div class="w-full h-full">
                     <div class="">
                        <h5 class="text-(--primary-700) mb-5 text-xl font-medium">Tudo começou</h5>
                        <h1 class="text-(--primary-900) text-6xl font-bold">Da nossa missão de proteger o que você constrói</h1>
                     </div>
                     <div class="mt-[12%]">
                        <p class="text-justify text-(--gray-600)">Na Mateus & Segurança, acreditamos que cada lar, cada negócio e cada conquista merece estar seguro. Nascemos do sonho de transformar a segurança em algo acessível, confiável e ao alcance de todos. Somos uma empresa jovem, mas com uma visão clara: oferecer soluções modernas e eficientes para proteger pessoas, bens e histórias.Nosso objetivo vai além da venda de equipamentos — queremos criar relações de confiança com nossos clientes e crescer lado a lado com cada um deles. Sonhamos alto, e nosso maior compromisso é garantir que você possa viver e trabalhar com mais tranquilidade, todos os dias.</p>
                     </div>
                  </div>
               </div>
               <div class="flex-1 min-w-sm">
                  <div class="w-full h-full flex flex-col gap-5">
                     <div class="flex-1">
                        <div class="w-full h-full">
                           <img
                              src="https://images.unsplash.com/photo-1653566031504-17467a0429b0?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                              alt=""
                              class="aspect-auto object-cover rounded-2xl">
                        </div>
                     </div>
                     <div class="flex-1">
                        <nav class="w-full h-full rounded-2xl bg-(--white-100) shadow-[0_0_3px_1px_rgba(51,51,51,0.1)] grid grid-cols-2 gap-5 p-5">
                           <?php foreach ($cards_about as $card_about): ?>
                              <div class="p-4 bg-(--primary-200) rounded-2xl flex justify-center flex-col gap-3 shadow-[0_0_0_1px_rgba(51,51,51,0.2)]">
                                 <h1 class="text-4xl text-(--primary-900) font-medium"><?= $card_about['value'] ?></h1>
                                 <h2 class="text-lg text-(--gray-500)"><?= $card_about['label'] ?></h2>
                              </div>
                           <?php endforeach ?>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- MEMBER TEAM CARDS -->
   <section class="mb-10" id="team-member">
      <div class="container mx-auto">
         <div class="w-full h-full">
            <div class="mb-10">
               <h1 class="text-(--primary-700) text-xl font-semibold mb-4">Conheça a Equipa</h1>
               <h2 class="text-(--primary-900) text-4xl font-medium lg:w-1/2 w-full">Conheça a equipa dedicada a proteger o que você constrói.</h2>
            </div>
            <nav class="w-full grid sm:grid-cols-2 md:grid-cols-3 gap-4">
               <?php foreach ($team_member as $member): ?>
                  <div class="group relative flex justify-center items-center border border-(--primary-900) bg-(--primary-200) aspect-square rounded-xl overflow-hidden">
                     <div class="w-full h-full">
                        <img src="<?= $member['image'] ?>" class="w-full h-full object-cover" alt="">
                     </div>
                     <div class="absolute -bottom-20 group-hover:-translate-y-25 transition-transform flex w-11/12 h-20 bg-(--primary-100) p-3 rounded-xl">
                        <div class="flex-1 flex justify-center flex-col">
                           <p1 class="block text-(--gray-900) text-xl font-semibold"><?= $member['name'] ?></p1>
                           <p1 class="block text-(--gray-500) text-sm"><?= $member['role'] ?></p1>
                        </div>
                        <div class="flex-none flex- items-center justify-center w-1/6 bg-red-500 overflow-hidden rounded-md">
                           <a href="<?= empty($member['profile_url']) ? '#team-member' : $member['profile_url'] ?>" target="<?= empty($member['profile_url']) ? '_self' : '_blank' ?>" rel="noopener noreferrer" class="bg-(--primary-900) flex items-center justify-center h-full">
                              <?= IconifyComponent([
                                 'name' => $member['icon'],
                                 'size' => '30',
                                 'style' => 'text-(--white-100)'
                              ]) ?>
                           </a>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
            </nav>
         </div>
      </div>
   </section>

   <!-- VISION AND MISSION -->
   <section class="">
      <div class="container mx-auto">
         <div class="w-full h-full">
            <div class="w-full grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] gap-3">
               <div class="" role="banner">
                  <div class="p-5 overflow-hidden rounded-xl bg-(--primary-200) shadow-[0_0_0_1px_rgba(51,51,51,0.2)]">
                     <h1 class="text-(--primary-700) text-lg font-semibold mb-3">Nossa Visão</h1>
                     <h2 class="text-(--gray-900) text-2xl font-medium mb-2">É ser a referência em soluções de segurança digital.</h2>
                     <p class="text-(--gray-700) text-sm">Estamos comprometidos em oferecer a melhor experiência em segurança digital. Com tecnologia de ponta e um atendimento excepcional, buscamos sempre superar as expectativas dos nossos clientes.</p>
                  </div>
               </div>
               <div class="" role="banner">
                  <div class="p-5 overflow-hidden rounded-xl bg-(--primary-200) shadow-[0_0_0_1px_rgba(51,51,51,0.2)]">
                     <h1 class="text-(--primary-700) text-lg font-semibold mb-3">Nossa Missão</h1>
                     <h2 class="text-(--gray-900) text-2xl font-medium mb-2">É entregar soluções de segurança digital de alta qualidade.</h2>
                     <p class="text-(--gray-500) text-sm">Buscamos constantemente inovar e aprimorar nossos serviços, garantindo a máxima proteção para nossos clientes. Deixando a segurança em primeiro lugar.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>