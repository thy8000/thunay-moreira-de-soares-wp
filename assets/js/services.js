document.addEventListener("alpine:init", () => {
  Alpine.data("services", () => ({
    servicesType: [
      {
        ID: 1,
        image: globals.siteURL + "/assets/images/html.svg",
        title: "Desenvolvimento Front-End",
        description:
          "Transformo designs criativos em sites dinâmicos e intuitivos. Utilizo as últimas tecnologias para garantir uma experiência de usuário memorável.",
      },
      {
        ID: 2,
        image: globals.siteURL + "/assets/images/code.svg",
        title: "Desenvolvimento Back-End",
        description:
          "Construo a espinha dorsal de seus sistemas, garantindo que sua aplicação funcione perfeitamente, seja escalável e segura.",
      },
      {
        ID: 3,
        image: globals.siteURL + "/assets/images/wordpress.svg",
        title: "Desenvolvimento Wordpress",
        description:
          "Utilizo uma das plataformas mais utilizadas do mundo para a criação de sites e gestão de conteúdo CMS. Construo temas responsivos e funcionais para seu site Wordpress.",
      },
      {
        ID: 4,
        image: globals.siteURL + "/assets/images/gear.svg",
        title: "Manutenção e Suporte",
        description:
          "Ofereço serviços contínuos de manutenção para garantir que o seu site e sua presença online permaneça atualizada, segura e funcional.",
      },
    ],
  }));
});
