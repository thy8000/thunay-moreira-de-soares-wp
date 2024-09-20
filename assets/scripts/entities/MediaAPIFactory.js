class MediaAPICreator {
  get() {
    return this.create();
  }
}

class AniListCreator extends MediaAPICreator {
  create() {
    return new AniList();
  }
}
