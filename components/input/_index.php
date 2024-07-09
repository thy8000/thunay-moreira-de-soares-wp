<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($args) || empty($args['id'])) {
    return;
}

$id = $args['id'];
$name = $args['name'] ?? $id;
$label = $args['label'] ?? $args['label'];

unset($args['name']);
unset($args['id']);
unset($args['label']);

$attrs = '';

foreach ($args as $key => $value) {
    $attrs .= ' ' . $key . '="' . $value . '"';
}

get_template_part('components/input/components/text', null, [
    'id'   => $id,
    'name' => $name,
    'label' => $label,
    'attrs' => $attrs,
]);
