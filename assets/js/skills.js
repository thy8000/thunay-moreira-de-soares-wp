document.addEventListener("alpine:init", () => {
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
});
