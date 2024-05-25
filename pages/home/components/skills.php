<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<section id="skills" x-data="skills">
    <div class="custom-container py-[10%] lg:py-[5%] flex flex-col gap-12">
        <div class="flex flex-col justify-center items-center gap-4">
            <h2 class="fade-in text-5xl font-poppins font-semibold text-green-500">
                Habilidades
            </h2>

            <h3 class="fade-in text-gray-300 text-lg leading-7">
                Conheça minha experiência acadêmica e meus conhecimentos técnicos.
            </h3>
        </div>

        <div class="flex">
            <div class="flex flex-col gap-8 w-full">
                <div>
                    <h4 class="fade-in text-white text-3xl">
                        Conhecimento Técnico
                    </h4>
                </div>

                <div class="flex flex-col gap-4">
                    <template x-for="skillList in skillsList" x-on:key="skillList.ID">
                        <div class="fade-in flex flex-col gap-2" x-bind:class="`skill-${skillList.ID}`">
                            <div class="flex">
                                <h5 class="mb-1 text-lg font-semibold text-white font-poppins w-[80%]" x-text="skillList.name"></h5>

                                <h6 class="flex justify-end w-[20%] text-neutral-300 text-sm font-bold font-poppins" x-text="skillList.level"></h6>
                            </div>

                            <div class="w-full rounded-full h-[18px] mb-4">
                                <div class="bg-green-500 bg-gradient-green-500 h-[18px] rounded-full" x-bind:style="`width: ${skillList.percent}%`"></div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>