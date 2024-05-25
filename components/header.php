<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php

    wp_head();

    ?>
</head>

<body <?php body_class(); ?> class="bg-neutral-900">
    <?php

    wp_body_open();

    ?>

    <header id="header" class="fixed top-0 left-0 w-full z-10 bg-neutral-800 border-b-2 border-green-500" x-data="header">
        <div class="custom-container fade-in-3 transition duration-[3500ms] relative z-50">
            <div class="flex justify-between items-center py-4">
                <button x-on:click="displayMenu = !displayMenu">
                    <img class="w-8" x-bind:src="displayMenu ? '<?php echo get_template_directory_uri(); ?>/assets/images/close.svg' : '<?php echo get_template_directory_uri(); ?>/assets/images/hamburguer.svg'" />
                </button>

                <div>
                    <span class="text-white text-lg font-poppins">
                        Thunay Moreira de Soares
                    </span>
                </div>
            </div>
        </div>

        <div x-bind:class="displayMenu ? 'block' : 'hidden'">
            <div class="absolute top-0 left-0 w-screen h-screen bg-black opacity-50 blur-xl"></div>

            <div class="fixed top-36 left-1/2 left-0 -translate-x-2/4 flex flex-col gap-8 opacity-100">
                <h1 class="flex flex-col items-center text-5xl font-poppins font-semibold text-green-500">
                    Menu
                </h1>

                <ul class="flex flex-col items-center gap-8">
                    <template x-for="item in menuItems" x-on:key="item.ID">
                        <button class="font-semibold text-3xl text-white hover:scale-150 transition-all duration-500 ease-linear" x-on:click="goToElement(item.element)" x-text="item.name"></button>
                    </template>
                </ul>
            </div>
        </div>
    </header>

    <main x-bind:class="displayMenu ? 'blur' : ''">