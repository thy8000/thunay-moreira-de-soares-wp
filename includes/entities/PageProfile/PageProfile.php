<?php

if (!defined('ABSPATH')) {
   exit;
}

class PageProfile
{
   public function get_title()
   {
      return get_field('home_hero_title');
   }

   public function get_description()
   {
      return get_field('home_hero_description');
   }

   public function get_social_share()
   {
      $social_media_list = [
         'github' => [
            'link' =>  get_field('home_hero_github'),
            'image' => get_template_directory_uri() . '/assets/images/github.svg',
         ],
         'linkedin' => [
            'link' => get_field('home_hero_linkedin'),
            'image' => get_template_directory_uri() . '/assets/images/linkedin.svg',
         ],
         'email' => [
            'link' => get_field('home_hero_email'),
            'image' => get_template_directory_uri() . '/assets/images/mail.svg',
         ],
         'curriculum' => [
            'link' => get_field('home_hero_curriculum'),
            'image' => get_template_directory_uri() . '/assets/images/cv.svg',
         ],
         'whatsapp' => [
            'link' => get_field('home_hero_whatsapp'),
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

   public function get_about_me_h2_title()
   {
      return get_field('home_about_me_h2_title');
   }

   public function get_about_me_title_ID()
   {
      return get_field('home_about_me_title_ID');
   }

   public function get_about_me_photo()
   {
      return get_field('home_about_me_photo');
   }

   public function get_about_me_name()
   {
      return get_field('home_about_me_name');
   }

   public function get_about_me_job()
   {
      return get_field('home_about_me_job');
   }

   public function get_about_me_description()
   {
      return get_field('home_about_me_description');
   }

   public function get_services_text()
   {
      return get_field('home_services_text');
   }

   public function get_services_cards()
   {
      return get_field('home_services_cards');
   }

   public function get_services_h2_title()
   {
      return get_field('home_services_h2_title');
   }

   public function get_services_title_ID()
   {
      return get_field('home_services_title_ID');
   }

   public function get_skills_description()
   {
      return get_field('home_skills_description');
   }

   public function get_skills_list()
   {
      return get_field('home_skills_skills_list');
   }

   public function get_skills_h2_title()
   {
      return get_field('home_skills_h2_title');
   }

   public function get_skills_h3_title()
   {
      return get_field('home_skills_h3_title');
   }

   public function get_skills_title_ID()
   {
      return get_field('home_skills_title_ID');
   }

   public function get_experience_text()
   {
      return get_field('home_experience_text');
   }

   public function get_experience_timeline()
   {
      return get_field('home_experience_timeline');
   }

   public function get_experience_h2_title()
   {
      return get_field('home_experience_h2_title');
   }

   public function get_experience_title_ID()
   {
      return get_field('home_experience_title_ID');
   }
}
