<?php

if (!defined('ABSPATH')) {
   exit;
}

$PageProfile = new PageProfile();

?>

<section id="services">
   <div class="custom-container py-[10%] lg:py-[5%] mx-auto max-w-[1140px] flex justify-center flex-col lg:flex-row gap-20">
      <div class="w-full lg:w-5/12">
         <div class="services-content flex flex-col gap-8">
            <h1 class="fade-in text-5xl font-poppins font-semibold text-green-500">
               Serviços
            </h1>

            <?php

            if (!empty($PageProfile->get_services_text())) {

            ?>
               <div class="flex flex-col gap-4 text-white text-lg leading-7">
                  <?php

                  foreach ($PageProfile->get_services_text() as $text) {

                  ?>
                     <p class="fade-in">
                        <?php echo esc_html($text['paragraph']) ?>
                     </p>
                  <?php

                  }

                  ?>
               </div>
            <?php

            }

            ?>
         </div>
      </div>
      <div class="w-full lg:w-7/12">
         <?php

         if (!empty($PageProfile->get_services_cards())) {

         ?>
            <div class="grid grid-col-1 lg:grid-cols-2 gap-4">
               <?php

               foreach ($PageProfile->get_services_cards() as $key => $services_card) {
                  $key++;

               ?>
                  <div class="services-box-<?php echo esc_attr($key); ?> fade-in flex flex-col justify-center items-center bg-neutral-800 border border-neutral-700 rounded gap-4 p-7">
                     <img class="w-12" src="<?php echo esc_url($services_card['image']['url']); ?>" />

                     <h3 class="text-center text-white font-semibold">
                        <?php echo esc_html($services_card['title']); ?>
                     </h3>

                     <p class="text-center text-sm text-neutral-300">
                        <?php echo esc_html($services_card['description']); ?>
                     </p>
                  </div>
               <?php

               }

               ?>
            </div>
         <?php

         }

         ?>
      </div>
   </div>
</section>
