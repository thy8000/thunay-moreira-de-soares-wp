<?php

if (!defined('ABSPATH')) {
    exit;
}

class Singular
{
    protected $post;
    protected $ID = 0;

    public function __construct($post = null)
    {
        switch ($post) {
            case null:
                $this->post = get_post();

                break;
            case is_numeric($post):
                $this->post = get_post($post);

                break;
            case is_a($post, 'WP_Post'):
                $this->post = $post;

                break;
            default:
                break;
        }

        $this->ID = (int) $this->post->ID;
    }

    public function get_ID()
    {
        return $this->ID;
    }

    public function get_link()
    {
        return get_the_permalink($this->post);
    }

    public function get_title()
    {
        return apply_filters('the_title', $this->post->post_title, $this->ID);
    }

    public function has_excerpt()
    {
        return has_excerpt($this->ID);
    }

    public function get_excerpt($excerpt_size = 20)
    {
        if ($this->has_excerpt()) {
            return get_the_excerpt($this->ID);
        }

        $content = get_the_content(null, false, $this->ID);

        return wp_trim_words(wp_strip_all_tags($content), (int) $excerpt_size, '...');
    }

    public function has_thumbnail()
    {
        return has_post_thumbnail($this->ID);
    }

    public function get_thumbnail($size = 'medium', $attrs = [])
    {
        return get_the_post_thumbnail($this->ID, $size, $attrs);
    }

    public function get_thumbnail_sources($thumbnail_sizes)
    {
        if (!$this->has_thumbnail()) {
            return;
        }

        $source_html_output = '';

        foreach ($thumbnail_sizes as $size => $media_querie) {
            $thumbnail_url = $this->get_thumbnail_URL($size);

            if (empty($media_querie)) {
                $source_html_output .= "<source srcset='{$thumbnail_url}' type='image/webp'>";

                continue;
            }

            $source_html_output .= "<source media='({$media_querie})' srcset='{$thumbnail_url}' type='image/webp'>";
        }

        return $source_html_output;
    }

    public function get_thumbnail_URL($size = 'medium')
    {
        return get_the_post_thumbnail_url($this->ID, $size);
    }

    public function get_content()
    {
        return apply_filters('the_content', $this->post->post_content);
    }

    public function get_date($format = 'd M Y')
    {
        return get_the_date($format, $this->ID);
    }

    public function get_modified_date($format = 'd M Y')
    {
        return get_the_modified_date($format, $this->ID);
    }

    public function get_terms($taxonomy)
    {
        return get_the_terms($this->post, $taxonomy);
    }

    public function get_custom_field($custom_field_slug)
    {
        return get_post_meta($this->ID, $custom_field_slug, true);
    }

    public function get_slug()
    {
        return $this->post->post_name;
    }
}
