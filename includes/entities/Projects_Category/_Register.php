<?php

if (!defined('ABSPATH')) {
    exit;
}

class Projects_Category_Register
{
    public function __construct()
    {
        add_action('init', [$this, 'register_taxonomy']);
        add_action('acf/init', [$this, 'register_custom_fields']);
    }

    public function register_taxonomy()
    {
        $args = [
            'labels' => [
                'name'              => _x('Categorias do Projeto', 'Categoria do Projeto'),
                'singular_name'     => _x('Categoria do Projeto', 'Categoria do Projeto'),
                'search_items'      => __('Buscar Categorias do Projeto'),
                'all_items'         => __('Todas Categorias do Projeto'),
                'parent_item'       => __('Categoria do Projeto Pai'),
                'parent_item_colon' => __('Categoria do Projeto Pai:'),
                'edit_item'         => __('Editar Categoria do Projeto'),
                'update_item'       => __('Atualizar Categoria do Projeto'),
                'add_new_item'      => __('Adicionar Nova Categoria do Projeto'),
                'new_item_name'     => __('Nome da Nova Categoria do Projeto'),
                'menu_name'         => __('Categoria do Projeto'),
            ],
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'query_var'         => true,
            'rewrite'           => ['slug' => 'project-category'],
        ];

        register_taxonomy('project_category', ['projects'], $args);
    }

    public function register_custom_fields()
    {
        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        acf_add_local_field_group( [
         'key' => 'group_tV7aLpM4zQ2x',
         'title' => 'Repeater Catgeorias',
         'fields' => [
            [
               'key' => 'field_R9uNdK3xPw6E',
               'label' => __('Lista de descrições', 'thunay'),
               'name' => 'projects_categories_name_list',
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
                     'key' => 'field_Z3pFvLqW7mBa',
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
                     'parent_repeater' => 'field_R9uNdK3xPw6E',
                  ],
                  [
                     'key' => 'field_B6xYz2RmVoP1',
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
                     'parent_repeater' => 'field_R9uNdK3xPw6E',
                  ],
               ],
            ],
         ],
         'location' => [
            [
               [
                  'param' => 'taxonomy',
                  'operator' => '==',
                  'value' => 'project_category',
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
      ] );

      }
}

new Projects_Category_Register();
