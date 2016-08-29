// First require gulp
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var del = require('del');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var sourcemaps = require('gulp-sourcemaps');

var paths = {
    html: './development/html/*',
    fontAwesome: './development/bower_components/uikit/fonts/*',
    sassFolder: './development/sass/*',
    sassMainFile: './development/sass/main.scss',
    target: './target',
    targetJsAssets: './target/assets/js',
    targetCss: './target/css',
    targetFont: './target/fonts'
};

gulp.task('clean', function() {
    return del([
        './target/**/**/*'
    ]);
});

// copy html files to target folder
gulp.task('html', function() {
    gulp.src(paths.html)
        .pipe(gulp.dest(paths.target));
});

// copy font files to target folder
gulp.task('font', function() {
  // font awesome
    gulp.src(paths.fontAwesome)
        .pipe(gulp.dest(paths.targetFont));
});

// copy js asset files to target folder
gulp.task('js-assets', function() {
  // jQuery
    gulp.src('./development/bower_components/jquery/dist/jquery.min.js')
        .pipe(gulp.dest(paths.targetJsAssets));
  // uikit
  gulp.src('./development/bower_components/uikit/js/uikit.min.js')
      .pipe(gulp.dest(paths.targetJsAssets));
});

gulp.task('sass', function() {
    gulp.src(paths.sassMainFile) // use main sass file source (paths.sass)
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
    gulp.watch(paths.sassFolder, ['sass']); // If any changes in paths.sass, perform 'sass' task
    gulp.watch(paths.html, ['html']);
    gulp.watch(paths.html, ['font']);
});

// Define default task
gulp.task('default', ['sass', 'html', 'font', 'js-assets']);
