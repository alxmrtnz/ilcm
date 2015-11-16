/*!
 * gulp
 * $ npm install gulp-ruby-sass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-notify gulp-rename gulp-livereload gulp-cache del --save-dev
 */

// Load plugins
var gulp = require('gulp'),
    browserify = require('browserify'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer');

// Styles
gulp.task('styles', function() {
  return sass('./src/styles/style.scss', { style: 'expanded' })
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('./'))
    //.pipe(minifycss())
    .pipe(gulp.dest('./'))
    .pipe(notify({ message: 'Styles task complete' }));
});

// Scripts
gulp.task('scripts', function() {
  return browserify('./src/scripts/main.js')
    .bundle()
    .pipe(source('main.min.js'))
    .pipe(buffer())
//    .pipe(uglify())
    .pipe(gulp.dest('./dist/assets/scripts'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

// Images
gulp.task('images', function() {
  return gulp.src('./src/images/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest('./dist/assets/images'))
    .pipe(notify({ message: 'Images task complete' }));
});

// Clean
gulp.task('clean', function(callback) {
    del('./style.css');
    return cache.clearAll(callback);
 
});

// Default task
gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images')
});

// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('./src/styles/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch('./src/scripts/**/*.js', ['scripts']);

  // Watch image files
  gulp.watch('./src/images/**/*', ['images']);

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch(['./dist/**']).on('change', livereload.changed);

});