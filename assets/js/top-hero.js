document.addEventListener("alpine:init", () => {
  Alpine.data("hero", () => ({
    socials: [
      {
        ID: 1,
        link: "https://github.com/thy8000",
        image: globals.siteURL + "/assets/images/github.svg",
      },
      {
        ID: 2,
        link: "https://www.linkedin.com/in/thunay-moreira-de-soares-6219a0162/",
        image: globals.siteURL + "/assets/images/linkedin.svg",
      },
      {
        ID: 3,
        link: "mailto:thunaymoreiradesoares@gmail.com",
        image: globals.siteURL + "/assets/images/mail.svg",
      },
      {
        ID: 4,
        link: "https://drive.google.com/file/d/1ZvNuqc9GHQZyejmlgHA_j69WYDPqC0g8",
        image: globals.siteURL + "/assets/images/cv.svg",
      },
      {
        ID: 5,
        link: "https://wa.me/5511971092159",
        image: globals.siteURL + "/assets/images/whatsapp.svg",
      },
    ],
  }));
});
