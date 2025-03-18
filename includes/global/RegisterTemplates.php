<?php

if (!defined('ABSPATH')) {
   exit;
}

const TEMPLATES = [
   '404',
   'archive',
   'attachment',
   'author',
   'category',
   'date',
   'embed',
   'frontpage',
   'home',
   'index',
   'page',
   'paged',
   'privacypolicy',
   'search',
   'single',
   'singular',
   'tag',
   'taxonomy',
];

class RegisterTemplates
{
   function __construct()
   {
      foreach (TEMPLATES as $template) {
         add_filter("{$template}_template_hierarchy", [$this, 'template_hierarchy']);
      }
   }

   public function template_hierarchy($templates)
   {
      if (false !== strpos($templates[0], 'pages/')) {
         return $templates;
      }

      foreach ($templates as $template) {
         $index           = str_replace('.php', '/_index.php', $template);
         $new_templates[] = "pages/{$index}";
         $new_templates[] = "pages/{$template}";
      }

      return array_merge($new_templates, $templates);
   }
}

new RegisterTemplates();
