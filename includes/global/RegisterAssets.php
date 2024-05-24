<?php

if (!defined('ABSPATH')) {
    exit;
}

class RegisterAssets
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'global_scripts']);
    }

    public function global_scripts()
    {
        wp_enqueue_style('all', get_theme_file_uri('assets/css/all.css'));

        wp_enqueue_script('alpine-js', '//unpkg.com/alpinejs', [], false, ['strategy' => 'defer']);
        wp_enqueue_script('all', get_theme_file_uri('assets/js/all.js'), [], false);
    }
}

new RegisterAssets();
