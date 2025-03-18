<?php

if (!defined('ABSPATH')) {
   exit;
}

class Project_Utils
{
   public static function get_projects(int $numberposts = -1)
   {
      $projects = get_posts([
         'post_type' => 'projects',
         'numberposts' => $numberposts,
         'orderby' => 'date',
         'order' => 'DESC',
         'fields' => 'ids',
      ]);

      return $projects;
   }

   public static function get_page_item($array, $post_id)
   {
      $filtered = array_filter($array, function ($item) use ($post_id) {
         return isset($item['page'][0]) && $item['page'][0] == $post_id;
      });

      return reset($filtered) ?: null;
   }
}
