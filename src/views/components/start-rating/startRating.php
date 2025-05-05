<?php

function StarRating(string $fill = "width: 0%")
{
   return <<<HTML
      <span class="relative inline-block w-6 h-6 text-gray-300">
         <svg class="absolute top-0 left-0 w-full h-full" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.455a1 1 0 00-1.176 0l-3.38 2.455c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/>
         </svg>
         <span class="absolute top-0 left-0 h-full overflow-hidden text-yellow-400" style="$fill">
            <svg class="w-full h-full" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.455a1 1 0 00-1.176 0l-3.38 2.455c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/>
            </svg>
         </span>
      </span>
   HTML;
}

function StarRating_Component(int $rating = 0)
{
   $maxStars = 5;
   $rating = max(0, min($rating, $maxStars));

   $stars = str_repeat(StarRating("width: 100%"), $rating);
   $stars .= str_repeat(StarRating("width: 0%"), $maxStars - $rating);

   return $stars;
}
