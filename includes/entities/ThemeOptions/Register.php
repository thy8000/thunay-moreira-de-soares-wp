<?php

if (!defined('ABSPATH')) {
   exit;
}

class ThemeOptionsRegister
{
   function __construct()
   {
      //add_action('init', [$this, 'register_parent_page']);
      //add_action('init', [$this, 'register_home_page']);

      add_action('init', [$this, 'register_parent_page']);
      add_action('init', [$this, 'register_home_page']);
   }

   public function register_parent_page()
   {
      if (!has_action('acf/init')) {
         return;
      }

      acf_add_options_page([
         'page_title' => 'Opções do tema',
         'menu_slug' => 'theme-options',
         'position' => 2,
         'redirect' => true,
      ]);
   }

   public function register_home_page()
   {
      if (!has_action('acf/init')) {
         return;
      }

      acf_add_options_page([
         'page_title'  => 'Home',
         'menu_slug'   => 'theme-options-home',
         'parent_slug' => 'theme-options',
         'position'    => '',
         'redirect'    => false,
      ]);
   }

   /*
    public function register_parent_page()
    {
        $Parent_Page = new ACF_Register();
        $Parent_Page->register_page([
            'page_title' => __('Opções do tema', 'thunay'),
            'menu_title' => __('Opções do tema', 'thunay'),
            'menu_slug'  => 'theme-options',
            'redirect'   => true,
            'position'   => 2,
        ]);
    }
*/
   /*
    public function register_home_page()
    {
        $Home_Page = new ACF_Register();
        $Home_Page->register_page([
            'page_title' => __('Home', 'thunay'),
            'menu_title' => __('Home', 'thunay'),
            'menu_slug' => 'theme-options-home',
            'parent_slug' => 'theme-options',
        ]);

        $this->register_home_hero();
        //$this->register_home_about_me();
        //$this->register_home_services();
        //$this->register_home_skills();
        //$this->register_home_experience();
    }
*/
   public function register_home_hero()
   {
      $Hero = new ACF_Register();

      $Hero->register_field_group([
         'key' => 'group_66566babb591b',
         'title' => 'Hero',
         'location' => [
            [
               [
                  'param' => 'options_page',
                  'operator' => '==',
                  'value' => 'theme-options-home',
               ],
            ],
         ],
         'menu_order' => 0,
         'position' => 'normal',
         'style' => 'default',
         'label_placement' => 'top',
         'instruction_placement' => 'label',
         'hide_on_screen' => '',
         'active' => true,
         'description' => '',
         'show_in_rest' => 0,
      ]);

      $Hero->add_fields_group([
         [
            'key' => 'field_66566f9e3d181',
            'label' => 'Título e descrição',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_66566bcfd24ff',
            'label' => 'Título',
            'name' => 'home_hero_title',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'default_value' => '',
            'maxlength' => '',
            'rows' => '',
            'placeholder' => 'Desenvolvedor Fullstack',
            'new_lines' => '',
         ],
         [
            'key' => 'field_66566e93288f2',
            'label' => 'Descrição',
            'name' => 'home_hero_description',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'default_value' => '',
            'maxlength' => '',
            'rows' => '',
            'placeholder' => 'Desenvolvedor Fullstack',
            'new_lines' => '',
         ],
      ]);

      $Hero->add_fields_group(
         [
            [
               'key' => 'field_66566fb93d182',
               'label' => 'Redes sociais',
               'name' => '',
               'aria-label' => '',
               'type' => 'tab',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'placement' => 'top',
               'endpoint' => 0,
            ],
            [
               'key' => 'field_66566fcc3d183',
               'label' => 'Github',
               'name' => 'home_hero_github',
               'aria-label' => '',
               'type' => 'text',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'default_value' => '',
               'maxlength' => '',
               'placeholder' => '',
               'prepend' => '',
               'append' => '',
            ],
            [
               'key' => 'field_66566fefd4a30',
               'label' => 'Linkedin',
               'name' => 'home_hero_linkedin',
               'aria-label' => '',
               'type' => 'text',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'default_value' => '',
               'maxlength' => '',
               'placeholder' => '',
               'prepend' => '',
               'append' => '',
            ],
            [
               'key' => 'field_66566ffbd4a31',
               'label' => 'E-mail',
               'name' => 'home_hero_email',
               'aria-label' => '',
               'type' => 'text',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'default_value' => '',
               'maxlength' => '',
               'placeholder' => '',
               'prepend' => '',
               'append' => '',
            ],
            [
               'key' => 'field_6656700ed4a32',
               'label' => 'Currículo',
               'name' => 'home_hero_curriculum',
               'aria-label' => '',
               'type' => 'text',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'default_value' => '',
               'maxlength' => '',
               'placeholder' => '',
               'prepend' => '',
               'append' => '',
            ],
            [
               'key' => 'field_6656701bd4a33',
               'label' => 'Whatsapp',
               'name' => 'home_hero_whatsapp',
               'aria-label' => '',
               'type' => 'text',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => [
                  'width' => '',
                  'class' => '',
                  'id' => '',
               ],
               'default_value' => '',
               'maxlength' => '',
               'placeholder' => '',
               'prepend' => '',
               'append' => '',
            ]
         ]
      );

      $Hero->register_field();
   }

   public function register_home_about_me()
   {
      $AboutMe = new ACF_Register();

      $AboutMe->register_field_group([
         'key' => 'group_6663a610e17bd',
         'title' => 'Sobre mim',
         'location' => [
            [
               [
                  'param' => 'options_page',
                  'operator' => '==',
                  'value' => 'theme-options-home',
               ],
            ],
         ],
         'menu_order' => 1,
         'position' => 'normal',
         'style' => 'default',
         'label_placement' => 'top',
         'instruction_placement' => 'label',
         'hide_on_screen' => '',
         'active' => true,
         'description' => '',
         'show_in_rest' => 0,
      ]);

      $AboutMe->add_fields_group([
         [
            'key' => 'field_6663a611fcf32',
            'label' => 'Foto',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6663a64bfcf33',
            'label' => 'Foto',
            'name' => 'home_about_me_photo',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'return_format' => 'array',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'preview_size' => 'medium',
         ]
      ]);

      $AboutMe->add_fields_group([
         [
            'key' => 'field_6663a669fcf34',
            'label' => 'Informações',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6663a682fcf35',
            'label' => 'Nome',
            'name' => 'home_about_me_name',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
         ],
         [
            'key' => 'field_6663a692fcf36',
            'label' => 'Cargo',
            'name' => 'home_about_me_job',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
         ],
         [
            'key' => 'field_6663a6a1fcf37',
            'label' => 'Descrição',
            'name' => 'home_about_me_description',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'default_value' => '',
            'maxlength' => '',
            'rows' => '',
            'placeholder' => '',
            'new_lines' => '',
         ]
      ]);

      $AboutMe->register_field();
   }

   public function register_home_services()
   {
      $Services = new ACF_Register();

      $Services->register_field_group([
         'key' => 'group_6668f7d156d3f',
         'title' => 'Serviços',
         'location' => [
            [
               [
                  'param' => 'options_page',
                  'operator' => '==',
                  'value' => 'theme-options-home',
               ],
            ],
         ],
         'menu_order' => 2,
         'position' => 'normal',
         'style' => 'default',
         'label_placement' => 'top',
         'instruction_placement' => 'label',
         'hide_on_screen' => '',
         'active' => true,
         'description' => '',
         'show_in_rest' => 0,
      ]);

      $Services->add_fields_group([
         [
            'key' => 'field_6668f7d1b3ae2',
            'label' => 'Texto',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6668f82ab3ae3',
            'label' => 'Texto',
            'name' => 'home_services_text',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => [
               [
                  'key' => 'field_666b828c790de',
                  'label' => 'Parágrafo',
                  'name' => 'paragraph',
                  'aria-label' => '',
                  'type' => 'textarea',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'rows' => '',
                  'placeholder' => '',
                  'new_lines' => '',
                  'parent_repeater' => 'field_6668f82ab3ae3',
               ],
            ],
         ],
      ]);

      $Services->add_fields_group([
         [
            'key' => 'field_6668f867b3ae5',
            'label' => 'Cards',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6668f885b3ae6',
            'label' => 'Cards',
            'name' => 'home_services_cards',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => [
               [
                  'key' => 'field_6668f89db3ae7',
                  'label' => 'Imagem',
                  'name' => 'image',
                  'aria-label' => '',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'return_format' => 'array',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                  'preview_size' => 'medium',
                  'parent_repeater' => 'field_6668f885b3ae6',
               ],
               [
                  'key' => 'field_6668f8b2b3ae8',
                  'label' => 'Título',
                  'name' => 'title',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'parent_repeater' => 'field_6668f885b3ae6',
               ],
               [
                  'key' => 'field_6668f8beb3ae9',
                  'label' => 'Descrição',
                  'name' => 'description',
                  'aria-label' => '',
                  'type' => 'textarea',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'rows' => '',
                  'placeholder' => '',
                  'new_lines' => '',
                  'parent_repeater' => 'field_6668f885b3ae6',
               ],
            ],
         ]
      ]);

      $Services->register_field();
   }

   public function register_home_skills()
   {

      $Skills = new ACF_Register();

      $Skills->register_field_group([
         'key' => 'group_6672a40402c31',
         'title' => 'Habilidades',
         'location' => [
            [
               [
                  'param' => 'options_page',
                  'operator' => '==',
                  'value' => 'theme-options-home',
               ],
            ],
         ],
         'menu_order' => 3,
         'position' => 'normal',
         'style' => 'default',
         'label_placement' => 'top',
         'instruction_placement' => 'label',
         'hide_on_screen' => '',
         'active' => true,
         'description' => '',
         'show_in_rest' => 0,
      ]);

      $Skills->add_fields_group([
         [
            'key' => 'field_6672a43fc8208',
            'label' => 'Texto',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6672a404c8207',
            'label' => 'Descrição',
            'name' => 'home_skills_description',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'default_value' => '',
            'maxlength' => '',
            'rows' => '',
            'placeholder' => '',
            'new_lines' => '',
         ],
      ]);

      $Skills->add_fields_group([
         [
            'key' => 'field_6672a452c8209',
            'label' => 'Habilidades',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6672a466c820a',
            'label' => 'Lista de habilidades',
            'name' => 'home_skills_skills_list',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => [
               [
                  'key' => 'field_6672a48dc820b',
                  'label' => 'Nome',
                  'name' => 'name',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'parent_repeater' => 'field_6672a466c820a',
               ],
               [
                  'key' => 'field_6672a49ac820c',
                  'label' => 'Porcentagem',
                  'name' => 'percent',
                  'aria-label' => '',
                  'type' => 'range',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'min' => '',
                  'max' => '',
                  'step' => '',
                  'prepend' => '',
                  'append' => '%',
                  'parent_repeater' => 'field_6672a466c820a',
               ],
            ],
         ],
      ]);

      $Skills->register_field();
   }

   public function register_home_experience()
   {
      $Experience = new ACF_Register();

      $Experience->register_field_group([
         'key' => 'group_6674d37fa8b07',
         'title' => 'Experiência',
         'location' => [
            [
               [
                  'param' => 'options_page',
                  'operator' => '==',
                  'value' => 'theme-options-home',
               ],
            ],
         ],
         'menu_order' => 4,
         'position' => 'normal',
         'style' => 'default',
         'label_placement' => 'top',
         'instruction_placement' => 'label',
         'hide_on_screen' => '',
         'active' => true,
         'description' => '',
         'show_in_rest' => 0,
      ]);

      $Experience->add_fields_group([
         [
            'key' => 'field_6674d37f8cb57',
            'label' => 'Texto',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6674d39a8cb58',
            'label' => 'Descrição',
            'name' => 'home_experience_text',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'default_value' => '',
            'maxlength' => '',
            'rows' => '',
            'placeholder' => '',
            'new_lines' => '',
         ]
      ]);

      $Experience->add_fields_group([
         [
            'key' => 'field_6674d3c58cb59',
            'label' => 'Experiência',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'placement' => 'top',
            'endpoint' => 0,
         ],
         [
            'key' => 'field_6674d3dd8cb5a',
            'label' => 'Timeline',
            'name' => 'home_experience_timeline',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
               'width' => '',
               'class' => '',
               'id' => '',
            ],
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => [
               [
                  'key' => 'field_6674d3f28cb5b',
                  'label' => 'Profissão',
                  'name' => 'profission',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'parent_repeater' => 'field_6674d3dd8cb5a',
               ],
               [
                  'key' => 'field_6674d4148cb5c',
                  'label' => 'Empresa',
                  'name' => 'company',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'parent_repeater' => 'field_6674d3dd8cb5a',
               ],
               [
                  'key' => 'field_6674d42e8cb5d',
                  'label' => 'Tempo de experiência',
                  'name' => 'experience_time',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'parent_repeater' => 'field_6674d3dd8cb5a',
               ],
               [
                  'key' => 'field_6674d4488cb5e',
                  'label' => 'Descrição do trabalho',
                  'name' => 'job_description',
                  'aria-label' => '',
                  'type' => 'textarea',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => [
                     'width' => '',
                     'class' => '',
                     'id' => '',
                  ],
                  'default_value' => '',
                  'maxlength' => '',
                  'rows' => '',
                  'placeholder' => '',
                  'new_lines' => '',
                  'parent_repeater' => 'field_6674d3dd8cb5a',
               ],
            ],
         ],
      ]);

      $Experience->register_field();
   }
}

new ThemeOptionsRegister();
