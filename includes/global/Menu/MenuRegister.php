<?php

if (!defined('ABSPATH')) {
    exit;
}

class MenuRegister
{
    public function __construct()
    {
        add_action('init', [$this, 'register_home_menu_acf']);
    }

    public function register_home_menu_acf()
    {
        $Home_Menu_ACF = new ACF_Register();

        $Home_Menu_ACF->register_field_group([
            'key' => 'group_6688a48078cec',
            'title' => 'Home Menu',
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

        $Home_Menu_ACF->add_fields_group([
            [
                'key' => 'field_6688a4804307b',
                'label' => 'ID do elemento',
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
        ]);

        $Home_Menu_ACF->register_field();
    }
}

new MenuRegister();
