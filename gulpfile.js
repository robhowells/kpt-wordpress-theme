var gulp = require('gulp'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber');
	autoprefixer = require('gulp-autoprefixer'),
	cleanCSS = require('gulp-clean-css'), 
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin');

var paths = {
	scripts: {
		src: ['./js/src/vendors/*.js', './js/src/components/*.js', './js/src/*.js'],
		dist: './js/dist'
	},
	sass: {
		src: './scss/**/*.scss',
		dist: '.'
	},
	images: {
		src: '.img/src/**/*.{jpg,jpeg,png,gif}',
		dist: './img/dist'
	}
};

var config = {
	autoprefixer: {
		browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
	},
	images: {
		options: {
	      optimizationLevel: 3,
	      progessive: true,
	      interlaced: true
	    }
	}
}

gulp.task('sass:dev', function () {
	return gulp.src(paths.sass.src)
		.pipe(plumber({
			handleError: function (err) {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(sass())
		.pipe(autoprefixer(config.autoprefixer))
		.pipe(gulp.dest(paths.sass.dist));
});

gulp.task('sass:build', function () {
	return gulp.src(paths.sass.src)
		.pipe(sass())
		.pipe(autoprefixer(config.autoprefixer))
		.pipe(cleanCSS({keepSpecialComments : '*'}, {debug: true}, function(details) {
			console.log('Original size of ' + details.name + ': ' + details.stats.originalSize + 'kb');
			console.log('Minified size of ' + details.name + ': ' + details.stats.minifiedSize + 'kb');
		}))
		.pipe(concat('style.min.css'))
		.pipe(gulp.dest(paths.sass.dist));
});

gulp.task('scripts:dev', function() {
	return gulp.src(paths.scripts.src)
		.pipe(concat('js.min.js'))
		.pipe(gulp.dest(paths.scripts.dist)) 
});

gulp.task('scripts:build', function() {
	return gulp.src(paths.scripts.src)
		.pipe(concat('js.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(paths.scripts.dist))
});

gulp.task('imagemin', function() {
	return gulp.src(paths.images.src)
		.pipe(imagemin(config.images))
		.pipe(gulp.dest(paths.images.dist))
});

gulp.task('watch', function() {
	gulp.watch(paths.scripts.src, ['scripts:dev']);
	gulp.watch(paths.sass.src, ['sass:dev']);
});

gulp.task('build', ['sass:build', 'scripts:build', 'imagemin'], function() {});