<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeOptions
{
    function __construct()
    {
        add_action('init', [$this, 'register_parent_page']);
        add_action('init', [$this, 'register_home_page']);
    }

    public function register_parent_page()
    {
        $Parent_Page = new ACF_Register();
        $Parent_Page->register_page([
            'page_title' => __('Opções do tema', 'thunay'),
            'menu_title' => __('Opções do tema', 'thunay'),
            'menu_slug'  => 'theme-options',
            'redirect'   => true,
            'position'   => 2,
        ]);
    }

    public function register_home_page()
    {
        $Home_Page = new ACF_Register();
        $Home_Page->register_page([
            'page_title' => __('Home', 'thunay'),
            'menu_title' => __('Home', 'thunay'),
            'menu_slug' => 'theme-options-home',
            'parent_slug' => 'theme-options',
        ]);

        $this->register_home_hero();
    }

    public function register_home_hero()
    {
        $Hero = new ACF_Register();

        $Hero->register_field_group([
            'key' => 'group_66566babb591b',
            'title' => 'Hero',
            'location' => [
                [
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'theme-options-home',
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

        $Hero->add_fields([
            [
                'key' => 'field_665676efbf8d8',
                'label' => 'Imagem destacada',
                'name' => '',
                'aria-label' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'key' => 'field_665676be28d35',
                'label' => 'Imagem',
                'name' => 'home_hero_featured_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ],
        ]);

        $Hero->add_fields([
            [
                'key' => 'field_66566f9e3d181',
                'label' => 'Título e descrição',
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
                'key' => 'field_66566bcfd24ff',
                'label' => 'Título',
                'name' => 'home_hero_title',
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
                'placeholder' => 'Desenvolvedor Fullstack',
                'new_lines' => '',
            ],
            [
                'key' => 'field_66566e93288f2',
                'label' => 'Descrição',
                'name' => 'home_hero_description',
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
                'placeholder' => 'Desenvolvedor Fullstack',
                'new_lines' => '',
            ],
        ]);

        $Hero->add_fields(
            [
                [
                    'key' => 'field_66566fb93d182',
                    'label' => 'Redes sociais',
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
                    'key' => 'field_66566fcc3d183',
                    'label' => 'Github',
                    'name' => 'home_hero_github',
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
                    'key' => 'field_66566fefd4a30',
                    'label' => 'Linkedin',
                    'name' => 'home_hero_linkedin',
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
                    'key' => 'field_66566ffbd4a31',
                    'label' => 'E-mail',
                    'name' => 'home_hero_email',
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
                    'key' => 'field_6656700ed4a32',
                    'label' => 'Currículo',
                    'name' => 'home_hero_curriculum',
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
                    'key' => 'field_6656701bd4a33',
                    'label' => 'Whatsapp',
                    'name' => 'home_hero_whatsapp',
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
                ]
            ]
        );

        $Hero->register_field();
    }
}

new ThemeOptions();
