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

        $_genres = array_merge(['any' => 'Any'], $_genres);

        return $_genres;
    }

    public static function get_years($start_year, $end_year)
    {
        $years = array_combine(range($end_year, $start_year), range($end_year, $start_year));

        $years = array_merge(['any' => 'Any'], $years);

        return $years;
    }

    public static function get_seasons()
    {
        return [
            'any' => 'Any',
            'winter' => 'Winter',
            'spring' => 'Spring',
            'summer' => 'Summer',
            'fall' => 'Fall',
        ];
    }

    public static function get_formats()
    {
        return [
            'any' => 'Any',
            'tvshow' => 'TV Show',
            'movie' => 'Movie',
            'tvshort' => 'TV Short',
            'special' => 'Special',
            'ova' => 'OVA',
            'ona' => 'ONA',
            'music' => 'Music',
        ];
    }
}
