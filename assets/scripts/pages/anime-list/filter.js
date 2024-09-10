document.addEventListener("alpine:init", () => {
  Alpine.data("filter", () => ({
    search: "",
  }));
});
