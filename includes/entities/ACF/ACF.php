<?php

if (!defined('ABSPATH')) {
    exit;
}

class ACF_Register
{
    function __construct($args = [])
    {
        if (
            !function_exists('acf_add_options_page') ||
            !function_exists('acf_add_options_sub_page') ||
            !function_exists('acf_add_local_field_group')
        ) {
            return false;
        }
    }

    public function register_page(array $options = [])
    {
        $default_options = [
            'capability' => 'edit_posts',
            'redirect'   => false,
        ];

        $options = wp_parse_args($options, $default_options);

        if (
            empty($options['page_title']) ||
            empty($options['menu_title']) ||
            empty($options['menu_slug'])
        ) {
            return false;
        }

        if (empty($options['parent_slug'])) {
            acf_add_options_page($options);

            return true;
        }

        acf_add_options_sub_page($options);

        return true;
    }
}
