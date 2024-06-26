<?php

if (!defined('ABSPATH')) {
    exit;
}

$ThemeOptionsHome = new ThemeOptionsHome();

?>

<section id="about-me" class="w-full">
    <div class="custom-container py-[10%] lg:py-[5%]">
        <div class="flex justify-center items-center lg:flex-row flex-col gap-8 border border-neutral-700 rounded p-8 bg-neutral-800">
            <?php

            if (!empty($ThemeOptionsHome->get_about_me_photo())) {

            ?>
                <img class="fade-in w-full max-w-[28rem]" src="<?php echo $ThemeOptionsHome->get_about_me_photo()['url'] ?>" />
            <?php

            }

            ?>

            <span class="fade-in flex flex-col gap-4">
                <h2 class="text-xl font-semibold font-poppins text-green-500">
                    Sobre mim
                </h2>
                <?php

                if (!empty($ThemeOptionsHome->get_about_me_name())) {

                ?>
                    <h3 class="fade-in text-2xl font-medium text-white font-poppins">
                        <?php echo $ThemeOptionsHome->get_about_me_name(); ?>
                    </h3>
                <?php

                }

                if (!empty($ThemeOptionsHome->get_about_me_job())) {

                ?>
                    <h4 class="fade-in text-lg font-medium text-white font-poppins">
                        <?php echo $ThemeOptionsHome->get_about_me_job(); ?>
                    </h4>
                <?php

                }

                if (!empty($ThemeOptionsHome->get_about_me_job())) {

                ?>
                    <p class="fade-in text-neutral-300 leading-7">
                        <?php echo $ThemeOptionsHome->get_about_me_description(); ?>
                    </p>
                <?php

                }

                ?>
            </span>
        </div>
    </div>
</section>