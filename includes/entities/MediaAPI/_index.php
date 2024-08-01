<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Interface.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Factory.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Utils.php';

require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'MediaAPI', 'AniList', '_index.php']);
