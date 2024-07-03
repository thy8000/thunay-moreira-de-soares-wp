<?php

if (!defined('ABSPATH')) {
    exit;
}

class Taxonomy
{
    private $term;

    public function __construct($term_ID)
    {
        if (empty($term_ID)) {
            return null;
        }

        $term = get_term($term_ID);

        if (is_wp_error($term)) {
            return $term;
        }

        $this->term = $term;
    }

    public function get_ID()
    {
        return $this->term->term_id;
    }

    public function get_name()
    {
        return $this->term->name;
    }

    public function get_slug()
    {
        return $this->term->slug;
    }

    public function get_link()
    {
        return get_term_link($this->term->term_id, $this->get_slug());
    }

    public function get_field(string $field_slug)
    {
        return get_term_field($field_slug, $this->term->term_id);
    }
}
