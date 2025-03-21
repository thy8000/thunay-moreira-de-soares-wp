<?php

if (!defined('ABSPATH')) {
   exit;
}

$PageProfile = new PageProfile();

?>

<section id="<?php echo $PageProfile->get_skills_title_ID() ?? esc_attr('skills'); ?>" x-data="skills">
   <div class="custom-container py-[10%] lg:py-[5%] flex flex-col gap-12">
      <div class="flex flex-col justify-center items-center gap-4">
         <h2 class="fade-in text-5xl font-poppins font-semibold text-green-500">
            <?php echo $PageProfile->get_skills_h2_title() ?? esc_html__('Habilidades', 'thunay'); ?>
         </h2>

         <?php

         if (!empty($PageProfile->get_skills_description())) {

         ?>
            <h3 class="fade-in text-gray-300 text-lg leading-7">
               <?php echo esc_html($PageProfile->get_skills_description()) ?>
            </h3>
         <?php

         }

         ?>
      </div>

      <div class="flex">
         <div class="flex flex-col gap-8 w-full">
            <div>
               <h4 class="fade-in text-white text-3xl">
                  <?php echo $PageProfile->get_skills_h3_title() ?? esc_html__('Conhecimento Técnico', 'thunay'); ?>
               </h4>
            </div>

            <?php

            if (!empty($PageProfile->get_skills_list())) {

            ?>
               <div class="flex flex-col gap-4">
                  <?php

                  foreach ($PageProfile->get_skills_list() as $skill) {

                  ?>
                     <div class="fade-in flex flex-col gap-2">
                        <div class="flex">
                           <h5 class="mb-1 text-lg font-semibold text-white font-poppins w-[80%]">
                              <?php echo esc_html($skill['name']) ?>
                           </h5>

                           <h6 class="flex justify-end w-[20%] text-neutral-300 text-sm font-bold font-poppins" x-text="getLevel(<?php echo esc_attr($skill['percent']); ?>)"></h6>
                        </div>

                        <div class="w-full rounded-full h-[18px] mb-4">
                           <div class="bg-green-500 bg-gradient-green-500 h-[18px] rounded-full" x-bind:style="`width: <?php echo esc_attr($skill['percent']); ?>%`"></div>
                        </div>
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
   </div>
</section>
