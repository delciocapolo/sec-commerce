<?php

class CookieHandler
{
   public static function has(string $name): bool
   {
      return isset($_COOKIE[$name]);
   }

   /**
    * Define a cookie
    *
    * @param string $name
    * @param string $value
    * @param integer $expires - the value must be in days
    * @return void
    */
   public static function set(
      string $name,
      string $value = "",
      int $expires = 1,
      string $path = "",
      string $domain = "",
      bool $secure = false,
      bool $httponly = false
   ) {
      $expires_at = time() + ($expires * 24 * 60 * 60);
      setcookie($name, $value, $expires_at, $path, $domain, $secure, $httponly);
   }

   public static function get(string $name)
   {
      return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
   }

   public static function delete(string $name, string $path = '/', string $domain = '')
   {
      if (self::has($name)) {
         $expires_at = time() - 3600;
         setcookie($name, '', $expires_at, $path, $domain);
         unset($_COOKIE[$name]);
      }
   }

   /**
    * Delete all cookies
    *
    * @return void
    */
   public static function destroy()
   {
      foreach ($_COOKIE as $name) {
         self::set($name, '', time() * 3600);
         unset($_COOKIE[$name]);
      }
   }

   public function all()
   {
      return $_COOKIE;
   }
}
