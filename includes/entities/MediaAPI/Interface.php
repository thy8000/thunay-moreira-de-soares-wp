<?php

if (!defined('ABSPATH')) {
    exit;
}

interface MediaAPIInterface
{
    public function get_genres();

    public function get_trending_now();

    public function get_season_popular();

    public function get_upcoming_next_season();

    public function get_all_time_popular();
}
