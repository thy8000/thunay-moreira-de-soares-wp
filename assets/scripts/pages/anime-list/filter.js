document.addEventListener("alpine:init", () => {
  Alpine.data("filter", () => ({
    search: "",
    isEmpty: true,

    searchAnimes() {
      console.log(this.search);
    },
  }));
});
