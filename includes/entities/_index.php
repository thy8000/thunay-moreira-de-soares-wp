<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'GraphQL', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Generic', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Singular', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Taxonomy', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'ACF', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Projects', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Projects_Category', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'ThemeOptions', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Menu', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'MenuItem', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Request', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'MediaAPI', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Translate', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Anime', '_index.php']);
