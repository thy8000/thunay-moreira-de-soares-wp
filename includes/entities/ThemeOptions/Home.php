<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeOptionsHome
{
    protected $ACF;

    public function __construct()
    {
        $this->ACF = new ACF_Register();
    }

    public function get_title()
    {
        return $this->ACF->get_option_page_field('home_hero_title');
    }

    public function get_description()
    {
        return $this->ACF->get_option_page_field('home_hero_description');
    }

    public function get_social_share()
    {
        $output_HTML = "<ul>";

        $social_media_list = [
            'github' => $this->ACF->get_option_page_field('home_hero_github'),
            'linkedin' => $this->ACF->get_option_page_field('home_hero_linkedin'),
            'email' => $this->ACF->get_option_page_field('home_hero_email'),
            'curriculum' => $this->ACF->get_option_page_field('home_hero_curriculum'),
        ];

        // TODO: ARRUMAR CLASSES E IMAGENS, E IMPRIMIR NO COMPONENTE TOP HERO.

        foreach ($social_media_list as $social_slug => $social_media) {
            if (empty($social_media)) {
                continue;
            }

            $output_HTML .= "<li><a href='{$social_media}'><i class='fa-brands fa-{$social_slug}'></i></a></li>";
        }

        $output_HTML .= "</ul>";

        debug($output_HTML);
    }
}
