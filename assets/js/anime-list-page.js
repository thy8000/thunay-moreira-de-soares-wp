document.addEventListener("DOMContentLoaded", async function () {
  if (document.getElementsByClassName("page-anime-list").length < 0) {
    return;
  }

  var Anilist = new AniList();

  var genres = await Anilist.getGenres();

  console.log(genres);
});
