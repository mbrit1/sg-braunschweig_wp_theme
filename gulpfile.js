// First require gulp
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var del = require('del');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var sourcemaps = require('gulp-sourcemaps');

var paths = {
    sass: 'development/sass/main.scss',
    target: 'target',
    targetCss: 'target/css'
};

gulp.task('clean', function () {
  return del([
    paths.target
  ]);
});

gulp.task('sass', function() {
    gulp.src(paths.sass) // use main sass file source (paths.sass)
        .pipe(sourcemaps.init())
        .pipe(sass({
                outputStyle: 'compressed'
            })
            .on('error', gutil.log)
        ) // Log descriptive errors to the terminal
        .pipe(autoprefixer({
          browsers: ['last 2 versions'],
          cascade: false
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.targetCss)); // The destination for the compiled file
});

// Task to watch for changes in our file sources
gulp.task('watch', function() {
    gulp.watch(paths.sass, ['sass']); // If any changes in paths.sass, perform 'sass' task
});

// Define default task
gulp.task('default', ['sass']);
