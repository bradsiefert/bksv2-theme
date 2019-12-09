const gulp = require('gulp');
const sass = require('gulp-sass');
var watch = require('gulp-watch');

gulp.task('styles', () => {
    return gulp.src('css/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});

gulp.task('default', gulp.series('styles'));

gulp.task('watch', () => {
    gulp.watch('css/**/*.scss', (done) => {
        gulp.series('styles')(done);
    });
});