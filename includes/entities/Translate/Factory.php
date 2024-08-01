<?php

if (!defined('ABSPATH')) {
    exit;
}

class Translate
{
    public static function get_instance(string $class_name)
    {
        switch ($class_name) {
            default:
                throw new Exception(sprintf(esc_html__("Tipo de API '%s' não existe.", 'thunay'), $type));
        }
    }
}
