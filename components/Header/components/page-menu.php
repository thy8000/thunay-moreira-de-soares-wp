<?php

if (!defined('ABSPATH')) {
    exit;
}

$Menu = new Menu();
$menu_items = $Menu->get_menu_items();

?>

<ul class="flex flex-col items-center gap-8">
    <template x-for="item in menuItems" x-on:key="item.ID">
        <button class="font-semibold text-3xl text-white hover:scale-150 transition-all duration-500 ease-linear" x-on:click="goToElement(item.element)" x-text="item.name"></button>
    </template>
</ul>