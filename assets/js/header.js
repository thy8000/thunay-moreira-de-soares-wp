document.addEventListener("alpine:init", () => {
  Alpine.data("header", () => ({
    displayMenu: false,

    goToElement(elementSlug) {
      const element = document.getElementById(elementSlug);

      this.displayMenu = false;

      element.scrollIntoView({ behavior: "smooth" });
    },
  }));
});
