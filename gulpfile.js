const gulp = require('gulp')
const gulpSass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps')
//const gulpWebpack = require('gulp-webpack')
//const webpack = require('webpack')
const webpackConfig = require('./webpack.config.js')
const browserSync = require('browser-sync').create()
const ftp = require('vinyl-ftp')
const changedInPlace = require('gulp-changed-in-place')
const util = require('gulp-util')
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const imagemin = require('gulp-imagemin');
const imgCompress = require('imagemin-jpeg-recompress');
const dependents = require('gulp-dependents');
const cached = require('gulp-cached');
const webpack = require('webpack-stream');
const cwebp = require('gulp-cwebp');

const paths = {
    root: './www',
    remote_root: '/www/woolux.mario-it.ru',
    templates: './www/**/*.php',
    images: {
        src: './www/src/images/**',
        dest: './www/images',
        dest_ftp: '/www/woolux.mario-it.ru/images/'
    },
    styles: {
        src: './www/src/scss/**/*.scss',
        dest: './www/css/',
        dest_ftp: '/www/woolux.mario-it.ru/css/'
    },
    scripts: {
        src: './www/src/js/**/*.js',
        dest: './www/js/',
        dest_ftp: '/www/woolux.mario-it.ru/js/'
    }
}

var conn = ftp.create({
    host: '31.31.198.159',
    user: 'u8075144',
    password: 'icYHT6x!',
    parallel: 1,
    maxConnections: 10,
    log: util.log,
    idleTimeout: 10000
})
/*
browserSync.init({
    server: {
        baseDir: "./www/"
    }
});
*/


// слежка
function watch() {
    gulp.watch(paths.styles.src, styles);
    //gulp.watch(paths.templates, templates);
    gulp.watch(paths.scripts.src, scripts);
    gulp.watch(paths.images.src, images);
}

//Загружаем на удаленный сервер
/*function templates() {
    return gulp.src(paths.root + '/!**!/!*.php')
        .pipe(changedInPlace({firstPass: true}))
        //.pipe(conn.dest(paths.remote_root))
        //.pipe(browserSync.stream())
}*/

//загружаем новые фотки
function images() {
    return gulp.src(paths.images.src)
        .pipe(changedInPlace({firstPass: true}))
        .pipe(imagemin([
            //imagemin.gifsicle({interlaced: true}),
            imgCompress({quality: 'high'}),
            //imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })
        ]))
        .pipe(gulp.dest(paths.images.dest))
        .pipe(cwebp())
        .pipe(gulp.dest(paths.images.dest))
        .pipe(conn.dest(paths.remote_root + '/images/'))
        ///.pipe(browserSync.stream())
}

/*function imagesWebp() {
    return gulp.src(paths.imagesWebp.src)
        .pipe(cwebp())
        .pipe(gulp.dest(paths.images.dest))
}*/


// scss
function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sourcemaps.init())
        .pipe(cached('sass'))
        .pipe(dependents())
        .pipe(gulpSass())
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        //.pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(conn.dest(paths.styles.dest_ftp))
        //.pipe(browserSync.stream())
}

// webpack
function scripts() {
    return gulp.src(paths.scripts.src)
        .pipe(cached('linting'))
        .pipe(dependents())
        .pipe(webpack(webpackConfig))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(changedInPlace())
        .pipe(conn.dest(paths.scripts.dest_ftp))
        //.pipe(browserSync.stream())
}

//exports.templates = templates;
exports.styles = styles;
exports.scripts = scripts;
exports.images = images;
//exports.init = init;

gulp.task('default', gulp.series(
    gulp.parallel(styles, scripts),
    gulp.parallel(/*templates, */images),
    watch
));
