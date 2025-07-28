<?php

require_once BASE_PATH . "/src/views/helpers/cookies.php";

class UserHandler
{
   public CookieHandler $cookie;
   private string $auth_name = "user";

   public function __construct()
   {
      $this->cookie = new CookieHandler();
   }

   public function isLogged()
   {
      return $this->cookie->has($this->auth_name);
   }
}

class AuthRenderHandler
{
   public static function buttonUserProfileOrLogin(UserHandler $userHandler = new UserHandler())
   {
      $cartIcon = IconifyComponent(['name' => 'uil:cart', 'size' => 23]);
      $template = <<<HTML
         <div class="flex items-center justify-center gap-5">
            <button class="bg-(--primary-300) text-(--gray-900) px-3 py-2 rounded-sm font-medium h-10 relative">
               {$cartIcon}
               <span class="absolute -top-2 -right-3 size-6 text-sm flex justify-center items-center bg-(--white-100) rounded-full">0</span>
            </button>
            <button class="bg-(--primary-300) text-(--gray-900) px-3 py-2 rounded-sm font-medium h-10">Entrar/Criar conta</button>
         </div>
      HTML;

      if ($userHandler->isLogged()) {
         $template = <<<HTML
      
         HTML;
      }


      return $template;
   }
}
