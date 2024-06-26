<?php

if (!defined('ABSPATH')) {
    exit;
}

class Projects_ACF_Register
{

    public function __construct()
    {
        add_action('init', [$this, 'register_fields']);
    }

    public function register_fields()
    {
        $Projects_ACF = new ACF_Register();

        $Projects_ACF->register_field_group([
            'key' => 'group_6676387150035',
            'title' => 'Projetos - Campos',
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

        $Projects_ACF->add_fields_group([
            [
                'key' => 'field_667638718e35b',
                'label' => 'Links',
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
                'label' => 'Link (Site)',
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
                'label' => 'Link (Gitthub)',
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
                'label' => 'Link (Behance)',
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
        ]);

        $Projects_ACF->register_field();
    }
}

new Projects_ACF_Register();
