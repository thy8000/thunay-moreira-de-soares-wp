const fs = require("fs");
const path = require("path");
const terser = require("terser");

const inputDir = "./assets/js/"; // Diretório com os arquivos JS
const outputFile = "./assets/js/_all.min.js"; // Arquivo de saída

// Função para ler todos os arquivos JS do diretório
function getFiles(dir) {
  return fs
    .readdirSync(dir)
    .filter((file) => file.endsWith(".js"))
    .map((file) => path.join(dir, file));
}

// Lê e concatena o conteúdo de todos os arquivos JS
const files = getFiles(inputDir);
let combinedCode = "";
files.forEach((file) => {
  const code = fs.readFileSync(file, "utf-8");
  combinedCode += code + "\n";
});

// Minifica o código combinado
terser
  .minify(combinedCode)
  .then((minified) => {
    fs.writeFileSync(outputFile, minified.code, "utf-8");
    console.log(`Minified JS saved to ${outputFile}`);
  })
  .catch((err) => {
    console.error("Error during minification:", err);
  });
