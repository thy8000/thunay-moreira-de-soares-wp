<?php

if (!defined('ABSPATH')) {
    exit;
}

class HomeMenuItems
{
    private $ID = 0;

    public function __construct(int $ID)
    {
        $this->ID = $ID;
    }

    public function get_section_ID()
    {
        $ACF_Register = new ACF_Register();

        return $ACF_Register->get_field('home_menu_element_ID', $this->ID);
    }
}
