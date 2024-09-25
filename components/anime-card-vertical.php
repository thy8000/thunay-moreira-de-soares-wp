<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!empty($args['data'])) {
    $Anime = new Anime($args['data']);
}


if (!empty($args['data'])) {

?>


    <a href="#" class="group block lg:flex">
        <?php // TODO: TEMPLATE FOR ANIME CARD ADDITIONAL INFO 
        ?>
        <div class="flex flex-col gap-4">
            <img class="aspect-[230/325] w-full object-cover" src="<?php echo esc_url($Anime->get_image('large')); ?>" />

            <span class="text-xl lg:text-base text-white line-clamp-2 group-hover:text-green-500 transition-all duration-500 ease-linear"><?php esc_html_e($Anime->get_title()); ?></span>
        </div>
    </a>

<?php

} else {

?>
    <a href="#" class="group block lg:flex">
        <?php // TODO: TEMPLATE FOR ANIME CARD ADDITIONAL INFO 
        ?>
        <div class="flex flex-col gap-4">
            <img class="aspect-[230/325] w-full object-cover" x-bind:src="value.coverImage.large" />

            <span class="text-xl lg:text-base text-white line-clamp-2 group-hover:text-green-500 transition-all duration-500 ease-linear" x-text="value.title.userPreferred"></span>
        </div>
    </a>
<?php

}
