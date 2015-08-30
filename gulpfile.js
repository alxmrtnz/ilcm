/*!
 * gulp
 * $ npm install gulp-ruby-sass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-notify gulp-rename gulp-livereload gulp-cache del --save-dev
 */

 var path = 'wp-content/themes/ilcm/';
 
// Load plugins
var gulp = require('gulp'),
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
    watch = require('gulp-watch');


// Styles
gulp.task('styles', function() {
  return sass(path+'src/styles/style.scss', { style: 'expanded' })
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest(''))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest(path+'dist/assets/styles'))
    .pipe(notify({ message: 'Styles task complete' }));
});

// Scripts
gulp.task('scripts', function() {
  return gulp.src(path+'src/scripts/**/*.js')
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest(path+'dist/assets/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest(path+'dist/assets/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

// Images
gulp.task('images', function() {
  return gulp.src(path+'src/images/*')
        .pipe(imagemin({
            progressive: true,
            interlaced: true,
            optimizationLevel: 5
        }))
        .pipe(gulp.dest(path+'dist/assets/images'))
        .pipe(notify({ message: 'Image task complete' }));
});

// Clean
gulp.task('clean', function(cb) {
    del([path+'dist/assets/css', path+'dist/assets/js', path+'dist/assets/img'], cb)
});

// Clear Cache
gulp.task('clear', function (done) {
    return cache.clearAll(done);
});

// Default task
gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images');
});

// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch(path+'src/styles/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch(path+'src/scripts/**/*.js', ['scripts']);

  // Watch image files
  gulp.watch(path+'src/images/**/*', ['images']);

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch([path+'dist/**']).on('change', livereload.changed);

});