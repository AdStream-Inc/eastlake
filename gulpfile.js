var gulp = require('gulp');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var concat = require('gulp-concat');

var cssPath = ['./app/assets/css/*.scss', './app/assets/css/**/*.scss'];
var jsSharedPath = ['./app/assets/js/shared/*.js'];
var jsComponentPath = ['./app/assets/js/components/map/*.js'];
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

gulp.task('jsShared', function() {
  gulp.src(jsSharedPath)
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./public/js/'));
});

gulp.task('jsComponent', function() {
  gulp.src(jsComponentPath)
    // .pipe(uglify())
    .pipe(gulp.dest('./public/js/components/'));
})

gulp.task('images', function() {
  gulp.src(imagePath)
    .pipe(imagemin())
    .pipe(gulp.dest('./public/images/'));
});

gulp.task('watch', function() {
  gulp.watch(cssPath, ['sass']);
  gulp.watch(jsSharedPath, ['jsShared']);
  gulp.watch(jsComponentPath, ['jsComponent']);
});

gulp.task('build', ['sass', 'jsShared', 'jsComponent', 'images']);

gulp.task('default', ['sass', 'jsShared', 'jsComponent', 'watch']);