<?php

if (!defined('ABSPATH')) {
    exit;
}

class Project_Utils
{
    public static function get_projects(int $numberposts = -1)
    {
        $projects = get_posts([
            'post_type' => 'projects',
            'numberposts' => $numberposts,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);

        return $projects;
    }
}
