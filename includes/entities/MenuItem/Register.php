<?php

if (!defined('ABSPATH')) {
   exit;
}

class MenuItemRegister
{
   public function __construct()
   {
      add_action('acf/include_fields', [$this, 'register_home_menu_acf']);
   }

   public function register_home_menu_acf()
   {
      if (!function_exists('acf_add_local_field_group')) {
         return;
      }

      acf_add_local_field_group([
         'key' => 'group_6688a48078cec',
         'title' => __('Home Menu', 'thunay'),
         'fields' => [
            [
               'key' => 'field_6688a4804307b',
               'label' => __('ID do elemento', 'thunay'),
               'name' => 'home_menu_element_ID',
               'aria-label' => '',
               'type' => 'text',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'default_value' => '',
               'maxlength' => '',
               'placeholder' => '',
               'prepend' => '',
               'append' => '',
            ],
         ],
         'location' => [
            [
               [
                  'param' => 'nav_menu_item',
                  'operator' => '==',
                  'value' => 'location/home-menu',
               ],
            ],
         ],
         'menu_order' => 0,
         'position' => 'normal',
         'style' => 'default',
         'label_placement' => 'top',
         'instruction_placement' => 'label',
         'hide_on_screen' => '',
         'active' => true,
         'description' => '',
         'show_in_rest' => 0,
      ]);
   }
}

new MenuItemRegister();
