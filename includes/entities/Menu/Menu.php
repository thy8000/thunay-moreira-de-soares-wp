<?php

if (!defined('ABSPATH')) {
    exit;
}

class Menu
{
    private $menu_slug;
    private $menu_location;
    private $menu;

    public function __construct()
    {
        $this->get_menu_slug();

        $this->get_menu_location();

        $this->get_menu();
    }

    private function get_menu_slug()
    {
        if (is_home()) {
            $this->menu_slug =  'home-menu';
        } elseif (is_page('anime-list')) {
            $this->menu_slug =  'page-anime-list-menu';
        }
    }

    private function get_menu_location()
    {
        $locations = get_nav_menu_locations();

        $this->menu_location = $locations[$this->menu_slug];
    }

    private function get_menu()
    {
        $this->menu = wp_get_nav_menu_object($this->menu_location);
    }

    public function get_menu_items()
    {
        return wp_get_nav_menu_items($this->menu);
    }
}
