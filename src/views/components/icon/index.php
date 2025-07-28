<?php

/**
 * Return a iconify icon
 *
 * @param array{name:string,size:int=30,style:string} $props
 * @return string
 */
function IconifyComponent(array $props = []): string
{
   if (empty($props['name'])) {
      return 'WARN: No icon provided';
   }

   $defaults = [
      'name' => '',
      'size' => '30',
      'style' => ''
   ];

   $props = array_merge($defaults, $props);

   return <<<HTML
      <span class="iconify {$props['style']}" data-icon="{$props['name']}" data-width="{$props['size']}" data-height="{$props['size']}"></span>
   HTML;
}
