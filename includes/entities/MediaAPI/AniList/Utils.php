<?php

if (!defined('ABSPATH')) {
    exit;
}

class AniList_Utils
{
    public static function get_current_season()
    {
        $current_month_number = date('n');

        switch ($current_month_number) {
            case $current_month_number >= 1 && $current_month_number <= 3:
                return 'WINTER';
                break;
            case $current_month_number >= 4 && $current_month_number <= 6:
                return 'SPRING';
                break;
            case $current_month_number >= 7 && $current_month_number <= 9:
                return 'SUMMER';
                break;
            case $current_month_number >= 10 && $current_month_number <= 12:
                return 'FALL';
                break;
            default:
                return 'WINTER';
                break;
        }
    }
}
