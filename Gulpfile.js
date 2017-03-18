var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');
    var sass = require('gulp-sass');
    var cleanCSS = require('gulp-clean-css');
    var rename = require('gulp-rename');
    var concat = require('gulp-concat');
 

gulp.task('sass', function () {
    return gulp.src('scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream());
});


gulp.task('connect-sync', function() {
	connect.server({}, function (){
    browserSync({
      proxy: 'localhost:8000'
    });
  });
  gulp.watch("scss/*.scss", ['sass']);
  gulp.watch(['**/*.php','pages/*.php']).on('change', function () {
    browserSync.reload();
  });
});


gulp.task('minify-css', function() {
  return gulp.src('css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({
            suffix: '.min'
        }))
    .pipe(gulp.dest('css/min'));
});

gulp.task('scripts', function() {
  return gulp.src('js/modules/*.js')
    .pipe(concat('app.js',{newLine: ';'}))
    .pipe(gulp.dest('js/'));
});

gulp.task('default', ['connect-sync'], function () {
    gulp.watch("scss/**/*.scss", ['sass']);
    gulp.watch("css/**/*.css", ['minify-css']);
    gulp.watch(['js/modules/*.js'], ['scripts']); 
    });