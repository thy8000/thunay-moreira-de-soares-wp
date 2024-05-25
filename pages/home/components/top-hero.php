<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<section id="top-hero" class="top-hero w-full h-screen bg-no-repeat bg-cover bg-center before:content-[''] before:absolute before:inset-0 before:bg-black before:w-full before:h-full before:opacity-50" x-data="hero">
    <div class="custom-container relative flex flex-col items-center justify-center gap-12 w-full h-full">
        <h2 class="fade-in-3 transition duration-[3500ms] text-5xl lg:text-6xl font-poppins font-bold text-white text-center lg:text-start">
            Thunay Moreira de Soares
        </h2>

        <h3 class="fade-in-3 transition duration-[4000ms] text-2xl lg:text-3xl font-medium tracking-[0.5rem] uppercase text-white text-center lg:text-start">
            Desenvolvedor Full-Stack
        </h3>

        <div class="fade-in-3 transition duration-[4500ms] flex flex-wrap justify-center items-center gap-8">
            <template x-for="social in socials" :key="social.ID">
                <a class="flex justify-center items-center w-16 h-16 border-2 border-neutral-700 bg-neutral-800 rounded p-3 hover:border-green-500" x-bind:href="social.link" target="_blank">
                    <img class="w-10" x-bind:src="social.image" />
                </a>
            </template>
        </div>
    </div>
</section>