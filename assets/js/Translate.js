class TranslateInterface {
  url = "";
  request = "";

  constructor() {
    this.request = new Fetch(this.url);
  }
}
