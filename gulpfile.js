var gulp = require('gulp');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var concat = require('gulp-concat');

var cssPath = ['./app/assets/css/*.scss', './app/assets/css/**/*.scss'];
var jsPath = ['./app/assets/js/google-map.js', './app/assets/js/map-app.js', './app/assets/js/*.js'];
var imagePath = ['./public/images/**'];

gulp.task('sass', function() {
  gulp.src(cssPath)
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'compressed'
    }))
    .pipe(prefix("last 4 version", "ie 8"))
    .pipe(rename('app.min.css'))
    .pipe(gulp.dest('./public/css/'));
});

gulp.task('js', function() {
  gulp.src(jsPath)
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./public/js/'));
});

gulp.task('images', function() {
  gulp.src(imagePath)
    .pipe(imagemin())
    .pipe(gulp.dest('./public/images/'));
});

gulp.task('watch', function() {
  gulp.watch(cssPath, ['sass']);

  gulp.watch(jsPath, ['js']);
});

gulp.task('build', ['sass', 'js', 'images']);

gulp.task('default', ['sass', 'js', 'watch']);