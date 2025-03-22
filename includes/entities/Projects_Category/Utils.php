<?php

if (!defined('ABSPATH')) {
    exit;
}

class Projects_Category_Utils
{
    public static function get_projects_categories()
    {
        $projects_categories = get_terms([
            'taxonomy'   => 'project_category',
        ]);

        return $projects_categories;
    }

    public static function get_project_category_name_list($project_category, $page_ID)
    {
        $project_category_name_list = get_field('projects_categories_name_list', $project_category);

        if (empty($project_category_name_list)) {
            return $project_category->name;
        }

        $project_category_custom_name = Project_Utils::get_page_item($project_category_name_list, $page_ID);

        if (empty($project_category_custom_name)) {
            return $project_category->name;
        }

        return $project_category_custom_name['name'];
    }
}
