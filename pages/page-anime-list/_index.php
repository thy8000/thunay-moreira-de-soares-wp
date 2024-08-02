<?php

if (!defined('ABSPATH')) {
    exit;
}

get_template_part('components/header/_index');


$MediaAPI = MediaAPI::get_API('AniList');

$genres = $MediaAPI->get_genres();

$trending_now = $MediaAPI->get_trending_now();

?>

<div class="page-anime-list custom-container">
    <section>
        <div class="flex flex-col">
            <div class="flex justify-center items-center flex-col gap-4 mt-20 bg-neutral-800 p-10 rounded-lg border border-neutral-700 w-full">
                <h2 class="text-center text-3xl font-poppins font-semibold text-green-500"><?php esc_html_e('Plataforma de lista de animes', 'thunay'); ?></h2>

                <h3 class="max-w-[30ch] text-center text-white text-lg leading-7"><?php esc_html_e('Explore, descubra e encontre seus animes e mangás favoritos.', 'thunay') ?></h3>
            </div>

            <div class="flex justify-center items-center flex-col gap-4 mt-10 bg-neutral-800 p-5 rounded-lg border border-neutral-700 w-full">
                <div class="flex flex-col gap-10">
                    <p class="text-center text-white text-sm leading-7"><?php echo sprintf(esc_html__('%s: Este projeto é de caráter pessoal e não comercial, criado com o objetivo de aprendizado e como parte de um portfólio. Todas as informações sobre os animes são obtidas através da API do %s e serão mantidas na língua oficial da API e do site (inglês). Este site não tem fins lucrativos e não visa compartilhar informações de maneira abrangente, mas sim demonstrar habilidades técnicas e conhecimentos adquiridos. Agradecemos pela compreensão e pelo apoio!', 'thunay'), "<span class='font-semibold'>Importante</span>", "<a class='text-green-400 hover:text-green-500 transition duration-300 ease-in' href='https://anilist.co/' target='_blank')>AniList (anilist.co)</a>"); ?></p>

                    <p class="text-center text-white text-sm leading-7"><?php echo sprintf(esc_html__('%s: This project is of a personal and non-commercial nature, created for learning purposes and as part of a portfolio. All information about the anime is obtained through the %s and will be kept in the official language of the API and website (English). This site is not for profit and does not aim to share information comprehensively, but rather to demonstrate technical skills and knowledge acquired. We appreciate your understanding and support!', 'thunay'), "<span class='font-semibold'>Important</span>", "<a class='text-green-400 hover:text-green-500 transition duration-300 ease-in' href='https://anilist.co/' target='_blank')>AniList (anilist.co)</a>"); ?></p>
                </div>
            </div>
        </div>

        <div class="mt-20 flex flex-col lg:flex-row gap-4">
            <div class="flex flex-col gap-4 w-full">
                <?php

                get_template_part('components/input/_index', null, [
                    'id'   => 'page-anime-list-search',
                    'label' => __('Search', 'thunay'),
                ]);

                ?>
            </div>

            <div class="flex flex-col gap-4 w-full">
                <?php

                get_template_part('components/input/_index', null, [
                    'id'   => 'page-anime-list-genre',
                    'label' => __('Genre', 'thunay'),
                    'type' => 'select',
                    'options' => MediaAPIUtils::get_genres($genres),
                ]);

                ?>
            </div>

            <div class="flex flex-col gap-4 w-full">
                <?php

                get_template_part('components/input/_index', null, [
                    'id'   => 'page-anime-list-year',
                    'label' => __('Year', 'thunay'),
                    'type' => 'select',
                    'options' => MediaAPIUtils::get_years(1940, date('Y')),
                ]);

                ?>
            </div>

            <div class="flex flex-col gap-4 w-full">
                <?php

                get_template_part('components/input/_index', null, [
                    'id'   => 'page-anime-list-season',
                    'label' => __('Season', 'thunay'),
                    'type' => 'select',
                    'options' => MediaAPIUtils::get_seasons(),
                ]);

                ?>
            </div>

            <div class="flex flex-col gap-4 w-full">
                <?php

                get_template_part('components/input/_index', null, [
                    'id'   => 'page-anime-list-format',
                    'label' => __('Format', 'thunay'),
                    'type' => 'select',
                    'options' => MediaAPIUtils::get_formats(),
                ]);

                ?>
            </div>
        </div>
    </section>

    <section class="py-10">
        <?php

        get_template_part('pages/page-anime-list/components/animes-list', null, [
            'title' => __('Trending now', 'thunay'),
            'data'  => $trending_now,
            'view_more_link' => esc_url('/trending-now/'),
        ]);

        ?>
    </section>

    <section class="py-10">
        <?php

        get_template_part('pages/page-anime-list/components/animes-list', null, [
            'title' => __('Popular this season', 'thunay'),
        ]);

        ?>
    </section>

    <section class="py-10">
        <?php

        get_template_part('pages/page-anime-list/components/animes-list', null, [
            'title' => __('Upcoming next season', 'thunay'),
        ]);

        ?>
    </section>

    <section class="py-10">
        <?php

        get_template_part('pages/page-anime-list/components/animes-list', null, [
            'title' => __('All time popular', 'thunay'),
        ]);

        ?>
    </section>

    <?php

    get_template_part('components/footer');

    ?>
</div>