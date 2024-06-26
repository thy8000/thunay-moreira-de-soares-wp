<?php

if (!defined('ABSPATH')) {
    exit;
}

class RegisterAssets
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'global_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'localize_scripts']);
    }

    public function global_scripts()
    {
        wp_enqueue_style('all', get_theme_file_uri('assets/css/all.css'));

        wp_enqueue_script('alpine', '//unpkg.com/alpinejs', false, [], ['strategy' => 'defer']);

        wp_enqueue_script('scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', false, [], ['in_footer' => true]);
        wp_enqueue_script('scroll-magic-plugin', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', false, [], ['in_footer' => true]);

        wp_enqueue_script('all', get_theme_file_uri('assets/js/_all.min.js'), false);
    }

    public function localize_scripts()
    {
        wp_localize_script(
            'all',
            'globals',
            [
                'siteURL' => get_theme_file_uri(),
            ]
        );
    }
}

new RegisterAssets();
