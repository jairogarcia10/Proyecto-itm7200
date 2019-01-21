var gulp = require('gulp');
 var   sass = require('gulp-sass');
  var  concat = require('gulp-concat');
  var  uglify = require('gulp-uglify');
  var  rename = require('gulp-rename');
   var livereload = require('gulp-livereload');

gulp.task('sass', function () {
return gulp.src('./assets/sass/style.scss')
.pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
.pipe(livereload())
.pipe(gulp.dest('./'));
});


gulp.task('watch', function () {
gulp.watch('./assets/sass/**/*.scss', gulp.series('sass'));
});