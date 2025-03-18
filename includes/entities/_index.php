<?php

if (!defined('ABSPATH')) {
   exit;
}

require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Singular', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Taxonomy', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Projects', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Projects_Category', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'PageProfile', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'Menu', '_index.php']);
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'entities', 'MenuItem', '_index.php']);
