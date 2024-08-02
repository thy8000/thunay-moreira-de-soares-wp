<?php

if (!defined('ABSPATH')) {
    exit;
}

try {
    $MediaAPI = MediaAPI::get_API('AniList');

    $genres = $MediaAPI->get_genres();
} catch (Exception $e) {
    echo "Erro ao listar gêneros: ", $e->getMessage(), "\n";
}

?>

<section>
    <div class="flex flex-col">
        <div class="flex justify-center items-center flex-col gap-4 mt-20 bg-neutral-800 p-10 rounded-lg border border-neutral-700 w-full">
            <h2 class="text-center text-3xl font-poppins font-semibold text-green-500"><?php esc_html_e('Plataforma de lista de animes', 'thunay'); ?></h2>

            <h3 class="max-w-[30ch] text-center text-white text-lg leading-7"><?php esc_html_e('Explore, descubra e encontre seus animes e mangás favoritos.', 'thunay') ?></h3>
        </div>

        <div class="flex justify-center items-center flex-col gap-4 mt-10 bg-neutral-800 p-5 rounded-lg border border-neutral-700 w-full">
            <div class="flex flex-col">
                <span class="text-center text-white text-sm leading-7"><?php echo sprintf(esc_html__('%s: Este projeto é de caráter pessoal e não comercial, criado com o objetivo de aprendizado e como parte de um portfólio. Todas as informações sobre os animes são obtidas através da API do %s e serão mantidas na língua oficial da API e do site (inglês). Este site não tem fins lucrativos e não visa compartilhar informações de maneira abrangente, mas sim demonstrar habilidades técnicas e conhecimentos adquiridos. Agradecemos pela compreensão e pelo apoio!', 'thunay'), "<span class='font-semibold'>Importante</span>", "<a class='text-green-400 hover:text-green-500 transition duration-300 ease-in' href='https://anilist.co/' target='_blank')>AniList (anilist.co)</a>"); ?></span>
            </div>
        </div>
    </div>

    <div class="mt-20 flex flex-col lg:flex-row gap-4">
        <div class="flex flex-col gap-4 w-full">
            <?php

            get_template_part('components/input/_index', null, [
                'id'   => 'page-anime-list-search',
                'label' => __('Pesquisar', 'thunay'),
            ]);

            ?>
        </div>

        <div class="flex flex-col gap-4 w-full">
            <?php

            get_template_part('components/input/_index', null, [
                'id'   => 'page-anime-list-genre',
                'label' => __('Gênero', 'thunay'),
                'type' => 'select',
                'options' => MediaAPIUtils::get_genres($genres),
            ]);

            ?>
        </div>

        <div class="flex flex-col gap-4 w-full">
            <?php

            get_template_part('components/input/_index', null, [
                'id'   => 'page-anime-list-year',
                'label' => __('Ano', 'thunay'),
                'type' => 'select',
                'options' => [
                    'ano1' => 'Ano 1',
                    'ano2' => 'Ano 2',
                    'ano3' => 'Ano 3',
                ],
            ]);

            ?>
        </div>

        <div class="flex flex-col gap-4 w-full">
            <?php

            get_template_part('components/input/_index', null, [
                'id'   => 'page-anime-list-season',
                'label' => __('Temporada', 'thunay'),
                'type' => 'select',
                'options' => [
                    'temporada1' => 'Temporada 1',
                    'temporada2' => 'Temporada 2',
                    'temporada3' => 'Temporada 3',
                ],
            ]);

            ?>
        </div>

        <div class="flex flex-col gap-4 w-full">
            <?php

            get_template_part('components/input/_index', null, [
                'id'   => 'page-anime-list-format',
                'label' => __('Formato', 'thunay'),
                'type' => 'select',
                'options' => [
                    'formato1' => 'Formato 1',
                    'formato2' => 'Formato 2',
                    'formato3' => 'Formato 3',
                ],
            ]);

            ?>
        </div>
    </div>
</section>