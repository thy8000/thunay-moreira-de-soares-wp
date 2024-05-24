document.addEventListener("alpine:init", () => {
  Alpine.data("header", () => ({
    menuItems: [
      {
        ID: 1,
        name: "Sobre mim",
        element: document.querySelector("#about-me"),
      },
      {
        ID: 2,
        name: "Serviços",
        element: document.querySelector("#services"),
      },
      {
        ID: 3,
        name: "Habilidades",
        element: document.querySelector("#skills"),
      },
      {
        ID: 4,
        name: "Experiência Profissional",
        element: document.querySelector("#experience"),
      },
      {
        ID: 5,
        name: "Projetos",
        element: document.querySelector("#projects"),
      },
    ],
    displayMenu: false,

    goToElement(element) {
      this.displayMenu = false;

      element.scrollIntoView({ behavior: "smooth" });
    },
  }));
  /*
  Alpine.data("hero", () => ({
    socials: [
      {
        ID: 1,
        link: "https://github.com/thy8000",
        image: "../thunaymoreiradesoares2/assets/images/github.svg",
      },
      {
        ID: 2,
        link: "https://www.linkedin.com/in/thunay-moreira-de-soares-6219a0162/",
        image: "../thunaymoreiradesoares2/assets/images/linkedin.svg",
      },
      {
        ID: 3,
        link: "mailto:thunaymoreiradesoares@gmail.com",
        image: "../thunaymoreiradesoares2/assets/images/mail.svg",
      },
      {
        ID: 4,
        link: "https://drive.google.com/file/d/1ZvNuqc9GHQZyejmlgHA_j69WYDPqC0g8",
        image: "../thunaymoreiradesoares2/assets/images/cv.svg",
      },
      {
        ID: 5,
        link: "https://wa.me/5511971092159",
        image: "../thunaymoreiradesoares2/assets/images/whatsapp.svg",
      },
    ],
  }));

  Alpine.data("services", () => ({
    servicesType: [
      {
        ID: 1,
        image: "../thunaymoreiradesoares2/assets/images/html.svg",
        title: "Desenvolvimento Front-End",
        description:
          "Transformo designs criativos em sites dinâmicos e intuitivos. Utilizo as últimas tecnologias para garantir uma experiência de usuário memorável.",
      },
      {
        ID: 2,
        image: "../thunaymoreiradesoares2/assets/images/code.svg",
        title: "Desenvolvimento Back-End",
        description:
          "Construo a espinha dorsal de seus sistemas, garantindo que sua aplicação funcione perfeitamente, seja escalável e segura.",
      },
      {
        ID: 3,
        image: "../thunaymoreiradesoares2/assets/images/wordpress.svg",
        title: "Desenvolvimento Wordpress",
        description:
          "Utilizo uma das plataformas mais utilizadas do mundo para a criação de sites e gestão de conteúdo CMS. Construo temas responsivos e funcionais para seu site Wordpress.",
      },
      {
        ID: 4,
        image: "../thunaymoreiradesoares2/assets/images/gear.svg",
        title: "Manutenção e Suporte",
        description:
          "Ofereço serviços contínuos de manutenção para garantir que o seu site e sua presença online permaneça atualizada, segura e funcional.",
      },
    ],
  }));

  Alpine.data("skills", () => ({
    skillsList: [
      {
        ID: 1,
        name: "HTML5",
        percent: 95,
        level: "Avançado",
      },
      {
        ID: 2,
        name: "CSS3",
        percent: 85,
        level: "Avançado",
      },
      {
        ID: 3,
        name: "JavaScript",
        percent: 88,
        level: "Avançado",
      },
      {
        ID: 4,
        name: "PHP",
        percent: 93,
        level: "Avançado",
      },
      {
        ID: 5,
        name: "Wordpress",
        percent: 90,
        level: "Avançado",
      },
      {
        ID: 6,
        name: "SASS",
        percent: 60,
        level: "Intermediário",
      },
      {
        ID: 2,
        name: "jQuery",
        percent: 70,
        level: "Intermediário",
      },
    ],
  }));

  Alpine.data("projects", () => ({
    tab: "all",
    projects: [
      {
        ID: 1,
        type: "web",
        image: "https://images2.imgbox.com/9c/f7/bbiOSoZK_o.png",
        title: "IT9 Marketing Digital",
        description:
          "Site responsivo em HTML, CSS, JS, Bootstrap, PHP e Wordpress.",
        link1: {
          name: "Site",
          link: "https://it9.com.br/",
        },
        link2: {
          name: "",
          link: "",
        },
      },
      {
        ID: 2,
        type: "web",
        image: "https://images2.imgbox.com/d3/d4/TwBGnEmc_o.png",
        title: "Magalhães & Sipert Advogados Associados",
        description:
          "Site responsivo em HTML, CSS, JS, PHP, Wordpress e Bootstrap para um cliente.",
        link1: {
          name: "Site",
          link: "https://mslaw.com.br/",
        },
        link2: {
          name: "Github",
          link: "https://github.com/thy8000/magalhes-sipert-sociedade-de-advogados",
        },
      },
      {
        ID: 3,
        type: "web",
        image: "https://images2.imgbox.com/7c/e8/EaWRK9TQ_o.png",
        title: "FCTK Advogados Associados",
        description:
          "Site responsivo em HTML, CSS, JS, PHP e Wordpress para um cliente.",
        link1: {
          name: "Site",
          link: "https://fctk.com.br/",
        },
        link2: {
          name: "",
          link: "",
        },
      },
      {
        ID: 4,
        type: "web",
        image: "https://images2.imgbox.com/a3/52/R0c1arv1_o.png",
        title: "Acetec",
        description:
          "Site responsivo em HTML, CSS, JS, PHP e Wordpress para um cliente.",
        link1: {
          name: "Site",
          link: "https://casadotnt.com.br/",
        },
        link2: {
          name: "",
          link: "",
        },
      },
      {
        ID: 5,
        type: "web",
        image: "https://images2.imgbox.com/b7/57/hAjlX6CD_o.png",
        title: "Dra. Andrea Signoretti",
        description: "Site responsivo feito em Wordpress e Elementor.",
        link1: {
          name: "Site",
          link: "https://andreasignoretti.com.br/",
        },
        link2: {
          name: "",
          link: "",
        },
      },
      {
        ID: 6,
        type: "web",
        image: "https://images2.imgbox.com/89/1d/IwbdhduE_o.png",
        title: "Altabase",
        description:
          "Site responsivo feito em HTML, CSS, TailwindCSS, JQuery, PHP e Wordpress.",
        link1: {
          name: "Site",
          link: "https://altabase.com.br/",
        },
        link2: {
          name: "Github",
          link: "https://github.com/thy8000/obrasoft",
        },
      },
      {
        ID: 7,
        type: "web",
        image: "https://images2.imgbox.com/c1/98/va0tn2y4_o.png",
        title: "Altaboards",
        description:
          "Site responsivo feito em HTML, CSS, TailwindCSS, JQuery, PHP e Wordpress.",
        link1: {
          name: "Site",
          link: "https://www.altaboards.com/",
        },
        link2: {
          name: "Github",
          link: "https://github.com/thy8000/altaboards",
        },
      },
      {
        ID: 8,
        type: "web",
        image: "https://images2.imgbox.com/a7/f0/ds4cVRt7_o.png",
        title: "Portfolio 1.0",
        description:
          "Site responsivo feito em HTML, CSS e Jquery. Primeira versão do meu portfolio.",
        link1: {
          name: "Site",
          link: "https://thy8000.github.io/thunaymoreiradesoares/",
        },
        link2: {
          name: "Github",
          link: "https://github.com/thy8000/thunaymoreiradesoares",
        },
      },
      {
        ID: 9,
        type: "games",
        image: "https://images2.imgbox.com/1e/0e/KXVOdeVU_o.png",
        title: "Kitsune",
        description: "Jogo mobile feito com Unity e C# para um projeto de TCC",
        link1: {
          name: "Behance",
          link: "https://www.behance.net/gallery/90303541/Kitsune",
        },
        link2: {
          name: "",
          link: "",
        },
      },
      {
        ID: 10,
        type: "mobile",
        image: "https://images2.imgbox.com/f0/06/gblpRkns_o.png",
        title: "Highlighter",
        description:
          "App mobile feito com Android Studio e Java para um projeto da faculdade.",
        link1: {
          name: "Behance",
          link: "https://www.behance.net/gallery/79960877/Highlighter",
        },
        link2: {
          name: "Github",
          link: "https://github.com/thy8000/Highlighter-App",
        },
      },
      {
        ID: 11,
        type: "others",
        image: "https://images2.imgbox.com/4c/2d/Ud5niPDR_o.png",
        title: "Infomarket",
        description:
          "Programa desktop feito em com Visual Studio, C# e .NET para um projeto da faculdade.",
        link1: {
          name: "Behance",
          link: "https://www.behance.net/gallery/80153453/Infomarket",
        },
        link2: {
          name: "Github",
          link: "https://github.com/thy8000/Infomarket",
        },
      },
      {
        ID: 12,
        type: "others",
        image: "../thunaymoreiradesoares2/assets/images/book-finder.png",
        title: "Book Finder",
        description:
          "Um aplicativo desktop feito com Vite, Vue.js e TailwindCSS para um projeto pessoal.",
        link1: {
          name: "Github",
          link: "https://github.com/thy8000/book-finder-app",
        },
        link2: {
          name: "",
          link: "",
        },
      },
    ],
  }));
  */
});
