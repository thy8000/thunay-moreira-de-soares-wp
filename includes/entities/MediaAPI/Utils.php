<?php

if (!defined('ABSPATH')) {
    exit;
}

class MediaAPIUtils
{
    public static function get_genres(array $genres)
    {
        $_genres = [];

        foreach ($genres as $genre) {
            $lowerstring_genre = strtolower($genre);

            $_genres[$lowerstring_genre] = $genre;
        }

        return $_genres;
    }
}
