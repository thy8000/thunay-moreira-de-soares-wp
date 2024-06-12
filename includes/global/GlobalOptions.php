<?php

if (!defined('ABSPATH')) {
    exit;
}

class GlobalOptions
{

    public function __construct()
    {
        add_action('wp_head', [$this, 'register_head_content'], 1);

        add_filter('upload_mimes', [$this, 'register_svg_support']);
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
        $mimes['svg'] = 'image/svg+xml';

        return $mimes;
    }
}

new GlobalOptions();
