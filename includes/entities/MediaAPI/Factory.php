<?php

if (!defined('ABSPATH')) {
    exit;
}

class MediaAPI
{
    public static function get_API($type)
    {
        switch ($type) {
            case 'AniList':
                return new AniList();
            default:
                throw new Exception(sprintf(esc_html__("Tipo de API '%s' não existe.", 'thunay'), $type));
        }
    }
}
