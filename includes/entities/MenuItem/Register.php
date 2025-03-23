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
            [
               'key' => 'field_R9kT2sE4vY0q',
               'label' => __('Lista de nomes alternativos por página', 'thunay'),
               'name' => 'home_menu_alternative_name_list',
               'aria-label' => '',
               'type' => 'repeater',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'layout' => 'table',
               'pagination' => 0,
               'min' => 0,
               'max' => 0,
               'collapsed' => '',
               'button_label' => 'Add Row',
               'rows_per_page' => 20,
               'sub_fields' => [
                  [
                     'key' => 'field_jU3aZ7mX0Lr2',
                     'label' => __('Página', 'thunay'),
                     'name' => 'page',
                     'aria-label' => '',
                     'type' => 'post_object',
                     'instructions' => '',
                     'required' => 0,
                     'conditional_logic' => 0,
                     'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                     ],
                     'post_type' => [
                        0 => 'page',
                     ],
                     'post_status' => [
                        0 => 'publish',
                     ],
                     'taxonomy' => '',
                     'return_format' => 'id',
                     'multiple' => 1,
                     'allow_null' => 0,
                     'bidirectional' => 0,
                     'ui' => 1,
                     'bidirectional_target' => [
                     ],
                     'parent_repeater' => 'field_R9kT2sE4vY0q',
                  ],
                  [
                     'key' => 'field_Q1b8NcV2pT5y',
                     'label' => __('Nome', 'thunay'),
                     'name' => 'name',
                     'aria-label' => '',
                     'type' => 'textarea',
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
                     'rows' => '',
                     'placeholder' => '',
                     'new_lines' => '',
                     'parent_repeater' => 'field_R9kT2sE4vY0q',
                  ],
               ],
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
