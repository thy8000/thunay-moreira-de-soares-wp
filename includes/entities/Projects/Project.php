<?php

if (!defined('ABSPATH')) {
   exit;
}

class Project extends Singular
{
   public function get_links()
   {
      $links = [
         'site' => [
            'text' => esc_html__('Site', 'thunay'),
            'url' => $this->get_custom_field('post_type_projects_link_site'),
         ],
         'Github' => [
            'text' => esc_html__('Github', 'thunay'),
            'url' => $this->get_custom_field('post_type_projects_link_github'),
         ],
         'Behance' => [
            'text' => esc_html__('Behance', 'thunay'),
            'url' => $this->get_custom_field('post_type_projects_link_behance'),
         ],
      ];

      return $links;
   }

   public function get_project_category()
   {
      $projects_category = get_the_terms($this->ID, 'project_category');

      if (empty($projects_category)) {
         return null;
      }

      $Project_Category = new Taxonomy($projects_category[0]->term_id);

      return $Project_Category->get_slug();
   }

   public function get_custom_content(int $page_ID)
   {
      $description_list = get_field('projects_description_list', $this->ID);

      if (empty($description_list)) {
         return $this->get_content();
      }

      $page_custom_content = Project_Utils::get_page_item($description_list, $page_ID);

      if (empty($page_custom_content)) {
         return $this->get_content();
      }

      return $page_custom_content['description'];
   }
}
