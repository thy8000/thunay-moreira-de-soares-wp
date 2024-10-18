<?php

if (!defined('ABSPATH')) {
    exit;
}

class AniList_Utils
{
    private static $seasons = ['WINTER', 'SPRING', 'SUMMER', 'FALL'];

    public static function get_current_season()
    {
        $current_month = date('n');

        if ($current_month >= 1 && $current_month <= 3) {
            return self::$seasons[0];
        } elseif ($current_month >= 4 && $current_month <= 6) {
            return self::$seasons[1];
        } elseif ($current_month >= 7 && $current_month <= 9) {
            return self::$seasons[2];
        } else {
            return self::$seasons[3];
        }
    }

    public static function get_next_season()
    {
        $current_season = self::get_current_season();

        if (end(self::$seasons) === $current_season) {
            return self::$seasons[0];
        }

        return self::$seasons[array_search($current_season, self::$seasons) + 1];
    }

    public static function is_filter_empty($filter) {
        $filtered_values = array_filter($filter, function ($value) {
            return !empty($value);
        });

        return empty($filtered_values);
    }
}
