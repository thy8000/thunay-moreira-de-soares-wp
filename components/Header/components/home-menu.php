<?php

if (!defined('ABSPATH')) {
    exit;
}

$Menu = new Menu();
$menu_items = $Menu->get_menu_items();

if (empty($menu_items)) {
    return;
}

?>

<ul class="flex flex-col items-center gap-8">
    <?php

    foreach ($menu_items as $menu_item) {

    ?>
        <button id="<?php echo esc_attr($menu_item->post_name); ?>" class="font-semibold text-3xl text-white hover:scale-150 transition-all duration-500 ease-linear" x-on:click="goToElement('section-<?php echo esc_attr($menu_item->post_name); ?>')"><?php esc_html_e($menu_item->post_title); ?></button>
    <?php

    }

    ?>
</ul>