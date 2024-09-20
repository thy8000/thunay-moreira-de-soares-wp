document.addEventListener("alpine:init", () => {
  Alpine.data("filter", () => ({
    search: "",
    isEmpty: true,

    async searchAnimes() {
      var MediaAPI = new AniListCreator();
      MediaAPI = MediaAPI.get();

      var search = await MediaAPI.searchAnimes(this.search);

      console.log(search);
    },
  }));
});
