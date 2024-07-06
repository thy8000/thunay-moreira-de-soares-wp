<?php

if (!defined('ABSPATH')) {
    exit;
}

class MenuItem
{
    private $ID = 0;

    public function __construct(int $ID)
    {
        $this->ID = $ID;
    }

    public function get_custom_field(string $field_slug)
    {
        $ACF_Register = new ACF_Register();

        return $ACF_Register->get_field($field_slug, $this->ID);
    }
}
