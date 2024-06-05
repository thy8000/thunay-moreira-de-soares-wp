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
        $social_media_list = [
            'github' => [
                'link' => $this->ACF->get_option_page_field('home_hero_github'),
                'image' => get_template_directory_uri() . '/assets/images/github.svg',
            ],
            'linkedin' => [
                'link' => $this->ACF->get_option_page_field('home_hero_linkedin'),
                'image' => get_template_directory_uri() . '/assets/images/linkedin.svg',
            ],
            'email' => [
                'link' => $this->ACF->get_option_page_field('home_hero_email'),
                'image' => get_template_directory_uri() . '/assets/images/mail.svg',
            ],
            'curriculum' => [
                'link' => $this->ACF->get_option_page_field('home_hero_curriculum'),
                'image' => get_template_directory_uri() . '/assets/images/cv.svg',
            ],
            'whatsapp' => [
                'link' => $this->ACF->get_option_page_field('home_hero_whatsapp'),
                'image' => get_template_directory_uri() . '/assets/images/whatsapp.svg',
            ],
        ];

        $output = '';

        $social_media_output = array_map(function ($social_media) {
            if (empty($social_media)) {
                return '';
            }

            return <<<OUTPUT
            <a class="flex justify-center items-center w-16 h-16 border-2 border-neutral-700 bg-neutral-800 rounded p-3 hover:border-green-500" href="{$social_media['link']}" target="_blank">
                <img class="w-10" src="{$social_media['image']}" />
            </a>
            OUTPUT;
        }, $social_media_list);

        $output = implode('', array_filter($social_media_output));

        if (empty($output)) {
            return;
        }

        return "<div class='fade-in-3 transition duration-[4500ms] flex flex-wrap justify-center items-center gap-8'>" . $output . "</div>";
    }
}
