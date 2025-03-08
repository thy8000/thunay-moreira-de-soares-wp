<?php

if (!defined('ABSPATH')) {
   exit;
}

class Projects_Register
{
   public function __construct()
   {
      add_action('init', [$this, 'register_post_type']);
      add_action('acf/init', [$this, 'register_custom_fields']);
   }

   public function register_post_type()
   {
      $labels = [
         'name'                  => _x('Projetos', 'Post type general name', 'thunay'),
         'singular_name'         => _x('Projeto', 'Singular name', 'thunay'),
         'menu_name'             => _x('Projetos', 'Admin Menu text', 'thunay'),
         'name_admin_bar'        => _x('Projeto', 'Add New on Toolbar', 'thunay'),
         'add_new'               => __('Adicionar Novo', 'thunay'),
         'add_new_item'          => __('Adicionar Novo Projeto', 'thunay'),
         'new_item'              => __('Novo Projeto', 'thunay'),
         'edit_item'             => __('Editar Projeto', 'thunay'),
         'view_item'             => __('Ver Projeto', 'thunay'),
         'all_items'             => __('Todos Projetos', 'thunay'),
         'search_items'          => __('Procurar Projetos', 'thunay'),
         'parent_item_colon'     => __('Projeto Pai:', 'thunay'),
         'not_found'             => __('Nenhum projeto encontrado.', 'thunay'),
         'not_found_in_trash'    => __('Nenhum projeto encontrado na lixeira.', 'thunay'),
         'featured_image'        => _x('Imagem Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'thunay'),
         'set_featured_image'    => _x('Definir imagem destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'thunay'),
         'remove_featured_image' => _x('Remover imagem destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'thunay'),
         'use_featured_image'    => _x('Usar como imagem destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'thunay'),
         'archives'              => _x('Arquivos de Projetos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'thunay'),
         'insert_into_item'      => _x('Inserir no projeto', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'thunay'),
         'uploaded_to_this_item' => _x('Enviado para este projeto', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'thunay'),
         'filter_items_list'     => _x('Filtrar lista de projetos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'thunay'),
         'items_list_navigation' => _x('Navegação da lista de projetos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'thunay'),
         'items_list'            => _x('Lista de projetos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'thunay'),
      ];

      $args = [
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => ['slug' => 'projects'],
         'capability_type'    => 'post',
         'has_archive'        => false,
         'hierarchical'       => false,
         'menu_position'      => 4,
         'menu_icon'          => 'dashicons-portfolio',
         'supports'           => ['title', 'editor', 'thumbnail'],
         'show_in_rest'       => true,
      ];

      register_post_type('projects', $args);
   }

   public function register_custom_fields()
   {
      if (!function_exists('acf_add_local_field_group')) {
         return;
      }

      acf_add_local_field_group([
         'key' => 'group_6676387150035',
         'title' => __('Projetos - Campos', 'thunay'),
         'fields' => [
            [
               'key' => 'field_667638718e35b',
               'label' => __('Links', 'thunay'),
               'name' => '',
               'aria-label' => '',
               'type' => 'tab',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'placement' => 'top',
               'endpoint' => 0,
            ],
            [
               'key' => 'field_6676391f8e35c',
               'label' => __('Link (Site)', 'thunay'),
               'name' => 'post_type_projects_link_site',
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
               'key' => 'field_6676395b8e35d',
               'label' => __('Link (Github)', 'thunay'),
               'name' => 'post_type_projects_link_github',
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
               'key' => 'field_6676396b8e35e',
               'label' => __('Link (Behance)', 'thunay'),
               'name' => 'post_type_projects_link_behance',
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
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'projects',
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

new Projects_Register();
