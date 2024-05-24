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
});
