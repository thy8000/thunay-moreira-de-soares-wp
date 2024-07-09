<?php

if (!defined('ABSPATH')) {
    exit;
}

get_template_part('components/header/_index');

?>

<div class="custom-container">
    <?php

    get_template_part('pages/page-anime-list/components/header-content');

    get_template_part('pages/page-anime-list/components/search-forms');

    get_template_part('components/footer');

    ?>
</div>