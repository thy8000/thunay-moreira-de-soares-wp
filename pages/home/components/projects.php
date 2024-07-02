<?php

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
                        <div class="flex flex-col gap-8 p-5 bg-neutral-800 border border-neutral-700 rounded" x-show="tab === project.type || tab === 'all'">
                            <div>
                                <img class="w-full object-cover aspect-[300/180]" x-bind:src="project.image" />
                            </div>

                            <div class="flex flex-col gap-6 min-h-52">
                                <div class="flex flex-col gap-4 h-1/2">
                                    <h3 class="text-white text-lg font-bold font-poppins" x-text="project.title"></h3>

                                    <div class="text-neutral-300">
                                        <p x-text="project.description"></p>
                                    </div>
                                </div>

                                <div class="flex gap-4 items-end h-1/2">
                                    <a class="personal-projects__button py-4 px-6 border-2 border-green-500 rounded-full cursor-pointer text-white" target="_blank" x-bind:href="project.link1.link" x-text="project.link1.name">
                                    </a>

                                    <a class="personal-projects__button py-4 px-6 border-2 border-green-500 rounded-full cursor-pointer text-white" target="_blank" x-bind:href="project.link2.link" x-text="project.link2.name" x-show="project.link2.link !== ''">
                                    </a>
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