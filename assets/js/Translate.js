class TranslateInterface {
  url = "";

  getTranslate(text, lang) {
    throw new Error("Metodo getTranslate precisa ser implementado");
  }
}

class LibreTranslate extends TranslateInterface {
  url = "https://libretranslate.com/translate";

  getTranslate(text, lang, target) {
    const Fetch = new Fetch();

    const request = Fetch.post(this.url, {
      q: text,
      source: lang,
      target: target,
      format: "text",
    });

    console.log(request);
  }
}
