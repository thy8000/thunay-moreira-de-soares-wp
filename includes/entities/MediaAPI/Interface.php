<?php

if (!defined('ABSPATH')) {
    exit;
}

interface MediaAPIInterface
{
    public function __construct();

    public function get_genres();
}
