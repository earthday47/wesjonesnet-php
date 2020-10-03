const gulp                      = require('gulp'),
      php                       = require('gulp-connect-php'),
      sourcemaps                = require('gulp-sourcemaps'),
      plumber                   = require('gulp-plumber'),
      sass                      = require('gulp-sass'),
      stylus                    = require('gulp-stylus'),
      autoprefixer              = require('gulp-autoprefixer'),
      minifyCss                 = require('gulp-clean-css'),
      browserSync               = require('browser-sync').create();

gulp.task('scss', () => {
  return gulp.src([
    './scss/**/*.scss'
  ], { since: gulp.lastRun('scss') })
    .pipe(sourcemaps.init())
      .pipe(plumber())
      .pipe(sass())
      .pipe(autoprefixer())
      .pipe(minifyCss())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('../docroot/css'));
});

gulp.task('build', gulp.series('scss'));

gulp.task('php', () => {
  php.server({
    base: '../docroot',
    port: 3003,
    keepalive: true
  });
});

gulp.task('browser-sync', gulp.series('php', () => {
  browserSync.init({
    server: {
      proxy:"localhost:3003",
      baseDir: "../docroot",
      open: true,
      notify: false
    }
  });
}));

gulp.task('watch', () => {
  const watch = [
    './scss/**/*.scss',
  ];

  gulp.watch(watch, gulp.series('scss')).on('change', browserSync.reload);
});

gulp.task('default', gulp.parallel('scss', 'browser-sync', 'watch'));
