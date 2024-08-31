const gulp = require("gulp");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const sourcemaps = require("gulp-sourcemaps");
const path = require("path");

const paths = {
  scripts: "./assets/scripts/**/*.js",
  output: "./assets/js",
};

function minifyJs() {
  return gulp
    .src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(concat("all.min.js"))
    .pipe(uglify())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.output));
}

exports.default = minifyJs;
