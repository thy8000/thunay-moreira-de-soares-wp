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
}
