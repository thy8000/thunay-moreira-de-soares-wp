<?php

if (!defined('ABSPATH')) {
   exit;
}

$menu_items = wp_get_nav_menu_items('home-menu');

if (empty($menu_items)) {
   return;
}

?>

<ul class="flex flex-col items-center gap-8">
   <?php

   foreach ($menu_items as $menu_item) {
      $home_menu_alternative_name_list = get_field('home_menu_alternative_name_list', $menu_item->ID);

      if (empty($home_menu_alternative_name_list)) {
         $home_menu_alternative_name = $menu_item->post_title;
      } else {
         $home_menu_alternative_name = thunay_get_page_item($home_menu_alternative_name_list, get_the_ID());

         $home_menu_alternative_name = $home_menu_alternative_name['name'] ?? $menu_item->post_title;
      }

   ?>
      <button id="<?php echo esc_attr($menu_item->post_name); ?>" class="font-semibold text-3xl text-white hover:scale-150 transition-all duration-500 ease-linear" x-on:click="goToElement('<?php esc_attr_e(get_field('home_menu_element_ID', $menu_item->ID)); ?>')"><?php echo esc_html($home_menu_alternative_name); ?></button>
   <?php

   }

   ?>
</ul>
