document.addEventListener("alpine:init", () => {
  Alpine.data("animeList", () => ({
    search: "",
    isEmpty: true,
    searchValue: "",

    async searchAnimes() {
      var MediaAPI = new AniListCreator();
      MediaAPI = MediaAPI.get();

      this.searchValue = await MediaAPI.searchAnimes(this.search);

      console.log(this.searchValue);
    },
  }));
});
