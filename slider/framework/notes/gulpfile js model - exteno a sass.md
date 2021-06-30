// Variaveis
var gulp = require("gulp"),
    sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    concat = require('gulp-concat'),
    sourcemaps = require("gulp-sourcemaps");



// Define tasks after requiring dependencies
function style() {
    // Where should gulp look for the sass files?
    // My .sass files are stored in the styles folder
    // (If you want to use scss files, simply look for *.scss files instead)
    return gulp
        .src('sass/estilos.scss')
        // Initialize sourcemaps before compilation starts
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        // Use postcss with autoprefixer and compress the compiled file using cssnano
        .pipe(postcss([autoprefixer(), cssnano()]))
        // Now add/write the sourcemaps
        .pipe(sourcemaps.write())
        .pipe(concat('estilos-min.css'))
        .pipe(gulp.dest('css/'));
}

// Expose the task by exporting it
// This allows you to run it from the commandline using

// $ gulp style
exports.style = style;

function watch() {
    //I usually run the compile task when the watch task starts as well
    style();

    gulp.watch('sass/**/*.scss', style);
}

// Don't forget to expose the task!
exports.watch = watch

// bootstrap
function bootstrap() {
    return gulp
        .src('sass/terceiros/bootstrap_4-custom/bootstrap-custom.scss')
        //.pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(postcss([autoprefixer(), cssnano()]))
        //.pipe(sourcemaps.write())
        .pipe(concat('bootstrap.css'))
        .pipe(gulp.dest('css/'));
}
exports.bootstrap = bootstrap;

function grid() {
    return gulp
        .src('sass/terceiros/bootstrap_4-custom/bootstrap-grid.scss')
        //.pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(postcss([autoprefixer(), cssnano()]))
        //.pipe(sourcemaps.write())
        .pipe(concat('bootstrap-grid.css'))
        .pipe(gulp.dest('css/'));
}
exports.grid = grid;

function reboot() {
    return gulp
        .src('sass/terceiros/bootstrap_4-custom/bootstrap-reboot.scss')
        //.pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(postcss([autoprefixer(), cssnano()]))
        //.pipe(sourcemaps.write())
        .pipe(concat('bootstrap-reboot.css'))
        .pipe(gulp.dest('css/'));
}
exports.reboot = reboot;

// OWL Caroucel
function caroucel() {
    return gulp
        .src('sass/terceiros/owl-carousel/owl.carousel.scss')
        //.pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(postcss([autoprefixer(), cssnano()]))
        //.pipe(sourcemaps.write())
        .pipe(concat('owl.carousel.css'))
        .pipe(gulp.dest('css/'));
}
exports.caroucel = caroucel;

function defaultTask(cb) {
    // place code for your default task here
    cb();
}

exports.default = defaultTask


// Fonte:
// https://goede.site/setting-up-gulp-4-for-automatic-sass-compilation-and-css-injection