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
        $HomeMenuItems = new HomeMenuItems($menu_item->ID);

        debug($HomeMenuItems->get_section_ID());

    ?>
        <button id="<?php echo esc_attr($menu_item->post_name); ?>" class="font-semibold text-3xl text-white hover:scale-150 transition-all duration-500 ease-linear" x-on:click="goToElement('<?php esc_attr_e($HomeMenuItems->get_section_ID()); ?>')"><?php esc_html_e($menu_item->post_title); ?></button>
    <?php

    }

    ?>
</ul>