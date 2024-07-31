class MediaAPIInterface {
  apiURL = "";
  request = "";

  constructor() {
    super();

    this.request = new Fetch(this.apiURL);
  }

  async getGenres() {
    throw new Error("Metodo getTranslate precisa ser implementado");
  }
}

class MediaAPI {
  getAPI(type) {
    if (type == "AniList") {
      new AniList();
    }
  }
}

class AniList extends MediaAPIInterface {
  apiURL = "https://graphql.anilist.co";
  request = "";
  query = "";

  constructor() {
    super();
  }

  async getGenres() {
    this.query = `
        query getGenres {
            GenreCollection
        }
    `;

    const response = await this.request.post("", {
      query: this.query,
    });

    return response?.data?.GenreCollection || [];
  }
}
