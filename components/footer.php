<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

</main>

<footer id="footer" class="bg-neutral-800 mt-16" x-data="hero">
    <div class="py-5">
        <div class="custom-container">
            <div class="flex justify-between items-center flex-col lg:flex-row gap-8 text-center lg:text-start">
                <div>
                    <span class="text-lg font-poppins font-semibold text-green-500">
                        Sinta-se livre para entrar em contato comigo
                    </span>
                </div>

                <div>
                    <a class="text-base font-semibold text-white hover:text-green-500 transition-all duration-500 cursor-pointer" href="mailto:thunaymoreiradesoares@gmail.com">
                        thunaymoreiradesoares@gmail.com
                    </a>
                </div>

                <div class="flex gap-4">
                    <template x-for="social in socials" :key="social.ID">
                        <a class="flex justify-center items-center w-10 h-10 border-2 border-neutral-700 bg-neutral-800 rounded p-3 hover:border-green-500" x-bind:href="social.link" target="_blank">
                            <img class="w-3.5" x-bind:src="social.image" />
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php

wp_footer();

?>
</body>

</html>