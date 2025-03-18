<?php

if (!defined('ABSPATH')) {
   exit;
}

class MenuRegister
{
   public function __construct()
   {
      add_action('init', [$this, 'register_home_menu']);
   }

   public function register_home_menu()
   {
      register_nav_menus(
         [
            'home-menu' => __('Menu Home', 'thunay'),
         ]
      );
   }
}

new MenuRegister();
