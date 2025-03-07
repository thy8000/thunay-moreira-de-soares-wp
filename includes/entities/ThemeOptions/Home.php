<?php

if (!defined('ABSPATH')) {
   exit;
}

class ThemeOptionsHome
{
   public function get_title()
   {
      return get_field('home_hero_title', 'option');
   }

   public function get_description()
   {
      return get_field('home_hero_description', 'option');
   }

   public function get_social_share()
   {
      $social_media_list = [
         'github' => [
            'link' =>  get_field('home_hero_github', 'option'),
            'image' => get_template_directory_uri() . '/assets/images/github.svg',
         ],
         'linkedin' => [
            'link' => get_field('home_hero_linkedin', 'option'),
            'image' => get_template_directory_uri() . '/assets/images/linkedin.svg',
         ],
         'email' => [
            'link' => get_field('home_hero_email', 'option'),
            'image' => get_template_directory_uri() . '/assets/images/mail.svg',
         ],
         'curriculum' => [
            'link' => get_field('home_hero_curriculum', 'option'),
            'image' => get_template_directory_uri() . '/assets/images/cv.svg',
         ],
         'whatsapp' => [
            'link' => get_field('home_hero_whatsapp', 'option'),
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

   public function get_about_me_photo()
   {
      return get_field('home_about_me_photo', 'option');
   }

   public function get_about_me_name()
   {
      return get_field('home_about_me_name', 'option');
   }

   public function get_about_me_job()
   {
      return get_field('home_about_me_job', 'option');
   }

   public function get_about_me_description()
   {
      return get_field('home_about_me_description', 'option');
   }

   public function get_services_text()
   {
      return get_field('home_services_text', 'option');
   }

   public function get_services_cards()
   {
      return get_field('home_services_cards', 'option');
   }

   public function get_skills_description()
   {
      return get_field('home_skills_description', 'option');
   }

   public function get_skills_list()
   {
      return get_field('home_skills_skills_list', 'option');
   }

   public function get_experience_text()
   {
      return get_field('home_experience_text', 'option');
   }

   public function get_experience_timeline()
   {
      return get_field('home_experience_timeline', 'option');
   }
}
