<?php

if (!defined('ABSPATH')) {
    exit;
}

class Generic
{
    public static function get_next_month()
    {
        $current_month = date('n');

        if ($current_month == 12) {
            return 1;
        }

        return $current_month + 1;
    }
}
