var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('sass', function(){
  gulp.src('public/assets/**/*.scss')
  .pipe(sass({
    loadPath: ['public/assets/vendor/foundation/scss', 'public/assets/styles']
  }))
  .pipe(gulp.dest('public/styles'))
});

gulp.task('default', ['sass']);