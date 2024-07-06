<?php

if (!defined('ABSPATH')) {
    exit;
}

class GlobalOptions
{
    public $mimes = [
        'svg' => 'image/svg+xml',
        'png' => 'image/png',
    ];

    public function __construct()
    {
        add_action('wp_head', [$this, 'register_head_content'], 1);

        add_filter('upload_mimes', [$this, 'register_svg_support']);

        add_action('init', [$this, 'register_theme_support']);

        add_action('init', [$this, 'register_menus']);
    }

    public function register_head_content()
    {
        echo <<<OUTPUT
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        OUTPUT;
    }

    public function register_svg_support()
    {
        foreach ($this->mimes as $key => $mime) {
            $mimes[$key] = $mime;
        }

        return $mimes;
    }

    public function register_theme_support()
    {
        add_theme_support('post-thumbnails');
    }

    public function register_menus()
    {
        register_nav_menus(
            [
                'home-menu' => __('Menu Principal', 'thunay'),
            ]
        );
    }
}

new GlobalOptions();
