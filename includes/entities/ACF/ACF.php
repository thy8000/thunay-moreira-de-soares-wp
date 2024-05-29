<?php

if (!defined('ABSPATH')) {
    exit;
}

class ACF_Register
{
    public $field_group = [];

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

    public function register_field_group(array $options = [])
    {
        $this->field_group = $options;

        //
    }

    public function add_fields($options)
    {
        $this->field_group['fields'][] = $options;
    }

    public function register_field()
    {
        acf_add_local_field_group($this->field_group);
    }
}
