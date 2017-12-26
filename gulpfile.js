// Grab our gulp packages
var gulp  = require('gulp'),
	gutil = require('gulp-util'),
	imagemin = require('gulp-imagemin'), 
	pngquant = require('imagemin-pngquant'), 
	sass = require('gulp-sass'),
	cssnano = require('gulp-cssnano'),
	autoprefixer = require('gulp-autoprefixer'),
	sourcemaps = require('gulp-sourcemaps'),
	jshint = require('gulp-jshint'),
	stylish = require('jshint-stylish'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	rename = require('gulp-rename'),
	plumber = require('gulp-plumber'),
	babel = require('gulp-babel'), 
	connect = require('gulp-connect-php'), 
	browserSync = require('browser-sync');


// Added gulp-imagemin
gulp.task('imagemin', function() {
  gulp.src('./_assets/images/*')
	.pipe(imagemin({
			progressive: true,
			use: [pngquant()]
		}))
	.pipe(gulp.dest('./_img/'))
});


// Compile Sass, Autoprefix and minify
gulp.task('styles', function() {
	return gulp.src('./_assets/scss/**/*.scss')
		.pipe(plumber(function(error) {
			gutil.log(gutil.colors.red(error.message));
			this.emit('end');
		}))
		.pipe(sourcemaps.init()) // Start Sourcemaps
		.pipe(sass())
		.pipe(autoprefixer({
			browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3'],
			cascade: false
		}))
		.pipe(gulp.dest('./assets/css/'))
		.pipe(rename({suffix: '.min'}))
		.pipe(cssnano())
		.pipe(sourcemaps.write('.')) // Creates sourcemaps for minified styles
		.pipe(gulp.dest('./assets/css/'))
});
	

// JSHint, concat, and minify JavaScript
gulp.task('site-js', function() {
  return gulp.src([	
	// Grab your custom scripts
	'./_assets/js/scripts/*.js'
  ])
	.pipe(plumber())
	.pipe(sourcemaps.init())
	.pipe(jshint())
	.pipe(jshint.reporter('jshint-stylish'))
	.pipe(concat('scripts.js'))
	.pipe(gulp.dest('./assets/js'))
	.pipe(rename({suffix: '.min'}))
	.pipe(uglify())
	.pipe(sourcemaps.write('.')) // Creates sourcemap for minified JS
	.pipe(gulp.dest('./assets/js'))
});    


// JSHint, concat, and minify Foundation JavaScript
gulp.task('foundation-js', function() {
  return gulp.src([	

		// Foundation core - needed if you want to use any of the components below
		'./_vendor/foundation-sites/js/foundation.core.js',
		'./_vendor/foundation-sites/js/foundation.util.*.js',

		// Pick the components you need in your project
		// './_vendor/foundation-sites/js/foundation.abide.js',
		'./_vendor/foundation-sites/js/foundation.accordion.js',
		'./_vendor/foundation-sites/js/foundation.accordionMenu.js',
		'./_vendor/foundation-sites/js/foundation.drilldown.js',
		'./_vendor/foundation-sites/js/foundation.dropdown.js',
		'./_vendor/foundation-sites/js/foundation.dropdownMenu.js',
		// './_vendor/foundation-sites/js/foundation.equalizer.js',
		// './_vendor/foundation-sites/js/foundation.interchange.js',
		// './_vendor/foundation-sites/js/foundation.magellan.js',
		'./_vendor/foundation-sites/js/foundation.offcanvas.js',
		// './_vendor/foundation-sites/js/foundation.orbit.js',
		'./_vendor/foundation-sites/js/foundation.responsiveMenu.js',
		'./_vendor/foundation-sites/js/foundation.responsiveToggle.js',
		'./_vendor/foundation-sites/js/foundation.reveal.js',
		'./_vendor/foundation-sites/js/foundation.slider.js',
		// './_vendor/foundation-sites/js/foundation.sticky.js',
		// './_vendor/foundation-sites/js/foundation.tabs.js',
		// './_vendor/foundation-sites/js/foundation.toggler.js',
		// './_vendor/foundation-sites/js/foundation.tooltip.js',
  ])
	.pipe(babel({
		presets: ['env'],
		compact: true
	}))
	.pipe(sourcemaps.init())
	.pipe(concat('foundation.js'))
	.pipe(gulp.dest('./assets/js'))
	.pipe(rename({suffix: '.min'}))
	.pipe(uglify())
	.pipe(sourcemaps.write('.')) // Creates sourcemap for minified Foundation JS
	.pipe(gulp.dest('./assets/js'))
}); 


gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
});


// Watch files for changes (without Browser-Sync)
gulp.task('watch', function() {

  // Watch image files
  gulp.watch('./_assets/images/*', ['imagemin']); 

  // Watch .scss files
  gulp.watch('./_assets/scss/**/*.scss', ['styles']); 

  // Watch site-js files
  gulp.watch('./_assets/js/scripts/*.js', ['site-js']);
  
  // Watch foundation-js files
  gulp.watch('./_vendor/foundation-sites/js/*.js', ['foundation-js']);

}); 


// Run styles, site-js and foundation-js
gulp.task('default', function() {
  gulp.start('imagemin', 'styles', 'site-js', 'foundation-js');
});