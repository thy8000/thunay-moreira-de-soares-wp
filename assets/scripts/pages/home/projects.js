document.addEventListener("alpine:init", () => {
  Alpine.data("projects", () => ({
    tab: "all",
  }));
});
