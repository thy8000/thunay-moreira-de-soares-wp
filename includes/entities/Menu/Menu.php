<?php

if (!defined('ABSPATH')) {
    exit;
}

class Menu
{
    private $menu_slug;

    public function __construct()
    {
        $this->menu_slug = $this->get_menu_slug();
    }

    private function get_menu_slug()
    {
        if (is_home()) {
            return 'home';
        }
        if (is_page('anime-list')) {
            return 'anime-list';
        }
    }

    public function get_menu_items()
    {
        $menu_object = wp_get_nav_menu_object($this->menu_slug);

        return wp_get_nav_menu_items($menu_object);
    }
}
