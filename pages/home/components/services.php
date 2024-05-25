<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<section id="services" x-data="services">
    <div class="custom-container py-[10%] lg:py-[5%] mx-auto max-w-[1140px] flex justify-center flex-col lg:flex-row gap-20">
        <div class="w-full lg:w-5/12">
            <div class="services-content flex flex-col gap-8">
                <h1 class="fade-in text-5xl font-poppins font-semibold text-green-500">
                    Serviços
                </h1>

                <div class="flex flex-col gap-4 text-white text-lg leading-7">
                    <p class="fade-in">
                        Bem vindo ao meu universo! Onde transformo minhas idéias e
                        códigos se transformam em experiências digitais excepcionais.
                        Sou apaixonado por criar soluções personalizadas que não só
                        atendem, mas superam as expectativas dos clientes.
                    </p>

                    <p class="fade-in">
                        Confira os meus serviços e o que posso oferecer para você!
                        Qual idéia podemos criar hoje ?
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-7/12">
            <div class="grid grid-col-1 lg:grid-cols-2 gap-4">
                <template x-for="serviceType in servicesType">
                    <div class="fade-in flex flex-col justify-center items-center bg-neutral-800 border border-neutral-700 rounded gap-4 p-7" x-bind:class="`services-box-${serviceType.ID}`">
                        <img class="w-12" x-bind:src="serviceType.image" />

                        <h3 class="text-center text-white font-semibold" x-text="serviceType.title"></h3>

                        <p class="text-center text-sm text-neutral-300" x-text="serviceType.description"></p>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>