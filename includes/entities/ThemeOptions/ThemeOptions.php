<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeOptions
{
    function __construct()
    {
        add_action('init', [$this, 'register_parent_page']);
    }

    public function register_parent_page()
    {
        $Parent_Page = new ACF_Register();
        $Parent_Page->register_page([
            'page_title' => __('Opções do tema', 'thunay'),
            'menu_title' => __('Opções do tema', 'thunay'),
            'menu_slug'  => 'theme-options',
            'redirect'   => false,
            'position'   => 2,
        ]);
    }
}

new ThemeOptions();
