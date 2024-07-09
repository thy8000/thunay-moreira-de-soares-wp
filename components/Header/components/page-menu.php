<?php

if (!defined('ABSPATH')) {
    exit;
}

$Menu = new Menu();
$menu_items = $Menu->get_menu_items();

?>

<ul class="flex flex-col items-center gap-8">
    <?php

    foreach ($menu_items as $menu_item) {
        $MenuItem = new MenuItem($menu_item);

    ?>
        <a id="<?php echo esc_attr($MenuItem->get_slug()); ?>" href="<?php echo esc_url($MenuItem->get_link()); ?>" class="font-semibold text-3xl text-white hover:scale-150 transition-all duration-500 ease-linear"><?php esc_html_e($MenuItem->get_title()); ?></a>
    <?php

    }

    ?>
</ul>