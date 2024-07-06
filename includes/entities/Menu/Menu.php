<?php

if (!defined('ABSPATH')) {
    exit;
}

class Menu
{
    private $menu_location;
    private $menu;

    public function __construct()
    {
        $this->menu_location = $this->get_menu_location();

        $this->menu = $this->get_menu();
    }

    private function get_menu_location()
    {
        if (is_home()) {
            return 'home';
        } elseif (is_page('anime-list')) {
            return 'anime-list';
        }
    }

    private function get_menu()
    {
        return wp_get_nav_menu_object($this->menu_location);
    }

    public function get_menu_items()
    {
        return wp_get_nav_menu_items($this->menu);
    }
}
