<?php

if (!defined('ABSPATH')) {
    exit;
}

class Projects_Register
{
    public function __construct()
    {
        add_action('init', [$this, 'register_post_type']);
        add_action('init', [$this, 'register_taxonomy']);
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
}

new Projects_Register();
