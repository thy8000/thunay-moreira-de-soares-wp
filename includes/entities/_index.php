<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'ACF', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'ThemeOptions', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Singular', '_index.php']);
