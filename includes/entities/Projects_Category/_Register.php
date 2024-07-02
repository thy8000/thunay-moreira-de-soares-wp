<?php

if (!defined('ABSPATH')) {
    exit;
}

class Projects_Category_Register
{
    public function __construct()
    {
        add_action('init', [$this, 'register_taxonomy']);
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

new Projects_Category_Register();
