<?php

if (!defined('ABSPATH')) {
   exit;
}

class RegisterAssets
{
   public function __construct()
   {
      add_action('wp_enqueue_scripts', [$this, 'global_scripts']);
      add_action('wp_enqueue_scripts', [$this, 'localize_scripts']);
   }

   public function global_scripts()
   {
      wp_enqueue_style('all', get_theme_file_uri('assets/css/all.css'));

      wp_enqueue_script('all', get_theme_file_uri('assets/js/all.min.js'), false, null, [
         'strategy' => 'defer',
         'in_footer' => false,
      ]);
   }

   public function localize_scripts()
   {
      wp_localize_script(
         'all',
         'globals',
         [
            'siteURL' => get_theme_file_uri(),
            'restAPI' => get_rest_url(),
         ]
      );

      if (is_page_template('template-page-profile.php')) {
         $PageProfile = new PageProfile();

         $skills_level_list = $PageProfile->get_skills_level_list();

         $standart_level_list_value = [
            [
               'name' => __('Iniciante', 'thunay'),
               'value' => 30.
            ],
            [
               'name' => __('Intermediário', 'thunay'),
               'value' => 50.
            ],
            [
               'name' => __('Avançado', 'thunay'),
               'value' => 80.
            ],
         ];

         wp_localize_script(
            'all',
            'pageProfile',
            [
               'skills' => !empty($skills_level_list) ? $skills_level_list : $standart_level_list_value,
            ]
         );
      }
   }
}

new RegisterAssets();
