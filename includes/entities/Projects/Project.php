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
}
