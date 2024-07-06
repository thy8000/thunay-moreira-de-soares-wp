<?php

if (!defined('ABSPATH')) {
    exit;
}

class MenuItem
{
    private $menu_item;

    public function __construct($menu_item)
    {
        $this->menu_item = $menu_item;
    }

    public function get_ID()
    {
        return $this->menu_item->ID;
    }

    public function get_title()
    {
        return $this->menu_item->post_title;
    }

    public function get_slug()
    {
        return $this->menu_item->post_name;
    }

    public function get_custom_field(string $field_slug)
    {
        $ACF_Register = new ACF_Register();

        return $ACF_Register->get_field($field_slug, $this->get_ID());
    }
}
