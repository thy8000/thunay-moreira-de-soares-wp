class MediaAPICreator {
  get() {
    throw new Error("Método não implementado");
  }
}

class AniListCreator extends MediaAPICreator {
  create() {
    return new AniList();
  }
}
