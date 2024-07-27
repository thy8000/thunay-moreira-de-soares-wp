class TranslateInterface {
  url = "";

  getTranslate(text, lang) {
    throw new Error("Metodo getTranslate precisa ser implementado");
  }
}

class LibreTranslate extends TranslateInterface {
  url = "https://libretranslate.com/translate";

  async getTranslate(text, lang, target) {
    const Fetch = new Fetch();

    const request = await Fetch.post(this.url, {
      q: text,
      source: lang,
      target: target,
      format: "text",
    });
  }
}
