<?php

if (!defined('ABSPATH')) {
    exit;
}

class AniListUtils
{
    public static function getGenres(array $genres)
    {
        $_genres = [];

        foreach ($genres as $genre) {
            $lowerstring_genre = strtolower($genre);

            $_genres[$lowerstring_genre] = $genre;
        }

        return $_genres;
    }
}
