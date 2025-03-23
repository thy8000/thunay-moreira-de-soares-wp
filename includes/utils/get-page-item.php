<?php

if (!defined('ABSPATH')) {
   exit;
}

function thunay_get_page_item($array, $post_id)
{
   $filtered = array_filter($array, function ($item) use ($post_id) {
      return isset($item['page'][0]) && $item['page'][0] == $post_id;
   });

   return reset($filtered) ?: null;
}
