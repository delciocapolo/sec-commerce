<main class="w-full">
   <!-- HEADER -->
   <section id="header-homepage" class="">
      <header class="w-full h-23 bg-black/35"></header>
   </section>

   <section class="container mx-auto min-h-[calc(100vh-92px)] py-5">
      <!-- BARNNER -->
      <article class="mb-10">
         <div class="w-full min-h-52 rounded-sm bg-(--primary-700) flex items-center justify-between flex-wrap gap-10  p-5 overflow-hidden border border-(--primary-800)">
            <div class="text-(--white-100)">
               <span class="flex gap-2 text-sm font-medium mb-5">
                  <?= IconifyComponent(['name' => 'lsicon:badge-promotion-filled', 'style' => 'text-(--white-100)', 'size' => 20]) ?>
                  Promoção
               </span>
               <h1 class="mb-5 text-4xl font-medium md:w-2/3">Tenha 10% de desconto e sua segurança a 100%</h1>
               <p class="md:w-2/3 text-sm">A segurança não é algo que deva ser pensado duas vezes. Segurança é prioridade e proteger quem amamos está incluído nela.</p>
            </div>
            <div class="relative">
               <div class="md:absolute -top-20 -left-59 w-64 h-64">
                  <img
                     src="/public/RevisedEditionDahua20238MP4KTurretAISeriesKits_88.jpg"
                     alt=""
                     width="280"
                     height="280"
                     class="rounded-sm">
               </div>
            </div>
         </div>
      </article>

      <article class="">
         <nav class="grid grid-cols-[repeat(auto-fit,minmax(310px,1fr))] gap-5">
            <?= CardProduct(['hover' => false, 'square' => true]) ?>
            <?= CardProduct(['hover' => false, 'square' => true]) ?>
            <?= CardProduct(['hover' => false, 'square' => true]) ?>
            <?= CardProduct(['hover' => false, 'square' => true]) ?>
         </nav>
      </article>
   </section>
</main>