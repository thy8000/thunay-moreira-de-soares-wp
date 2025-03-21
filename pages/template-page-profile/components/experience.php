<?php

if (!defined('ABSPATH')) {
   exit;
}

$PageProfile = new PageProfile();

?>

<section id="<?php echo $PageProfile->get_experience_title_ID() ?? esc_attr('experience'); ?>">
   <div class="custom-container py-[10%] lg:py-[5%]">
      <div class="flex lg:flex-row-reverse flex-col gap-20">
         <div class="w-full lg:w-1/2 flex flex-col gap-8">
            <h2 class="fade-in text-5xl font-poppins font-semibold text-green-500">
               <?php echo $PageProfile->get_experience_h2_title() ?? esc_html__('Experiência Profissional', 'thunay'); ?>
            </h2>

            <?php

            if (!empty($PageProfile->get_experience_text())) {

            ?>
               <h3 class="fade-in text-white text-lg leading-7"><?php echo esc_html($PageProfile->get_experience_text()) ?></h3>
            <?php

            }

            ?>
         </div>

         <div class="w-full lg:w-1/2">
            <div class="p-12 bg-neutral-800 border border-neutral-700 rounded">
               <?php

               if (!empty($PageProfile->get_experience_timeline())) {

               ?>
                  <ol class="fade-in border-l-4 border-green-500">
                     <?php

                     foreach ($PageProfile->get_experience_timeline() as $key => $experience) {

                     ?>
                        <li class="experience-<?php echo esc_attr($key); ?> fade-in">
                           <div class="relative flex-start flex items-center">
                              <div class="absolute -left-3 top-0 flex w-5 h-5 rounded-full bg-gradient-green-500"></div>

                              <div class="flex flex-col gap-2 pl-[23px]">
                                 <h4 class="-mt-2 text-xl font-semibold text-white">
                                    <?php echo esc_html($experience['profission']); ?>
                                 </h4>
                                 <h4 class="-mt-2 text-normal font-normal text-white">
                                    <?php echo esc_html($experience['company']); ?>
                                 </h4>
                              </div>
                           </div>

                           <div class="mb-6 ml-6 pb-6">
                              <a href="#" class="text-sm text-white"><?php echo esc_html($experience['experience_time']); ?></a>

                              <p class="mb-4 mt-2 text-neutral-300"><?php echo esc_html($experience['job_description']); ?></p>
                           </div>
                        </li>
                     <?php

                     }

                     ?>
                  </ol>
               <?php

               }

               ?>
            </div>
         </div>
      </div>
   </div>
</section>
