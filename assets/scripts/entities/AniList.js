class AniList {
  apiUrl = "https://graphql.anilist.co";
  request;
  query;

  constructor() {
    this.request = new Fetch(this.apiUrl);
  }

  getGenres() {
    this.query = `
      query getGenres {
        GenreCollection
      }
    `;

    this.request.post(this.apiUrl, {
      query: this.query,
    });

    return this.request.response.data.GenreCollection;
  }

  async searchAnimes(search) {
    this.query = `
      query searchAnimes(\$search: String!) {
        Page(perPage: 20) {
          media(search: \$search) {
            title {
              romaji
              english
              native
              userPreferred
            }
            coverImage {
              extraLarge
              large
              medium
            }
          }
        }
      }
    `;

    var request = await this.request.post("", {
      query: this.query,
      variables: {
        search,
      },
    });

    return request?.data?.Page?.media ?? [];
  }
}
