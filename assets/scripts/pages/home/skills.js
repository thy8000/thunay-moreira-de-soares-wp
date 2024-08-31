document.addEventListener("alpine:init", () => {
  Alpine.data("skills", () => ({
    levels: [
      {
        value: 30,
        name: "Iniciante",
      },
      {
        value: 50,
        name: "Intermediário",
      },
      {
        value: 80,
        name: "Avançado",
      },
    ],

    getLevel(percent) {
      for (let i = this.levels.length - 1; i >= 0; i--) {
        if (percent >= this.levels[i].value) {
          return this.levels[i].name;
        }
      }

      return "Iniciante";
    },
  }));
});
