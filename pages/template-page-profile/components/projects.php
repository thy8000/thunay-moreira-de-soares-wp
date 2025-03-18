<?php

// TODO: CRIAR ACF PARA O TEMPLATE PAGE PROFILE LINKANDO O POST DO TIPO PROJETO COM A DESCRIÇÃO
// TODO: CASO NÃO EXISTA O ACF DA DESCRIÇÃO DO PROJETO, PUXAR A DESCRIÇÃO DO POST.

$projects_categories = Projects_Category_Utils::get_projects_categories();

$projects_posts = Project_Utils::get_projects();

?>

<section id="projects" x-data="projects">
   <div class="custom-container py-[10%] lg:py-[5%]">
      <div class="flex flex-col">
         <div class="projects-title fade-in-2 flex flex-col justify-center items-center gap-4 text-center w-full">
            <h2 class="text-5xl font-poppins font-semibold text-green-500">
               Projetos
            </h2>

            <h3 class="max-w-prose text-gray-300 text-lg leading-7">
               Confira meus projetos pessoais e sites que desenvolvi ao longo
               da minha carreira.
            </h3>
         </div>
         <?php

         if (!empty($projects_categories)) {

         ?>
            <div class="projects-buttons fade-in-2 flex justify-center items-center flex-wrap gap-4 py-10">
               <a href="#" class="personal-projects__button py-4 px-6 border-2 border-green-500 rounded-full cursor-pointer" x-bind:class="{ 'personal-projects__button__active' : tab === 'all' }" x-on:click.prevent="tab = 'all'">
                  <span class="text-white"><?php esc_html_e('Tudo', 'thunay'); ?></span>
               </a>
               <?php

               foreach ($projects_categories as $project_category) {

               ?>
                  <a href="#" class="personal-projects__button py-4 px-6 border-2 border-green-500 rounded-full cursor-pointer" x-bind:class="{ 'personal-projects__button__active' : tab === '<?php echo esc_attr($project_category->slug); ?>' }" x-on:click.prevent="tab = '<?php echo esc_attr($project_category->slug); ?>'">
                     <span class="text-white"><?php echo esc_attr($project_category->name); ?></span>
                  </a>
               <?php

               }

               ?>
            </div>
         <?php

         }

         if (!empty($projects_posts)) {

         ?>
            <div class="projects-grid fade-in-2 grid grid-cols-1 lg:grid-cols-3 gap-4">
               <?php

               foreach ($projects_posts as $project) {
                  $Project = new Project($project);

               ?>
                  <div class="flex flex-col gap-8 p-5 bg-neutral-800 border border-neutral-700 rounded" x-show="tab === '<?php echo esc_attr($Project->get_project_category()); ?>' || tab === 'all'">
                     <div>
                        <img class="w-full object-cover aspect-[300/180]" src="<?php echo esc_url($Project->get_thumbnail_URL()); ?>" />
                     </div>

                     <div class="flex flex-col gap-6 min-h-52">
                        <div class="flex flex-col gap-4 h-1/2">
                           <h3 class="text-white text-lg font-bold font-poppins"><?php esc_html_e($Project->get_title()); ?></h3>

                           <div class="text-neutral-300">
                              <p><?php esc_html_e($Project->get_excerpt()); ?></p>
                           </div>
                        </div>

                        <div class="flex gap-4 items-end h-1/2">
                           <?php

                           if (!empty($Project->get_links())) {
                              foreach ($Project->get_links() as $link) {
                                 if (!empty($link['url'])) {

                           ?>
                                    <a class="personal-projects__button py-4 px-6 border-2 border-green-500 rounded-full cursor-pointer text-white" target="_blank" href="<?php echo esc_url($link['url']); ?>"><?php esc_html_e($link['text']); ?></a>
                           <?php

                                 }
                              }
                           }

                           ?>
                        </div>
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
</section>
