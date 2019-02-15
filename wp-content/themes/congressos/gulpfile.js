'use strict'

const gulp = require('gulp');
const sass = require('gulp-sass')
const plumber = require('gulp-plumber')

const eslint = require('gulp-eslint')
// const concat = require('gulp-concat')

const imagemin = require('gulp-imagemin')

const cleanCSS = require('gulp-clean-css')

const del = require('del')


// Compilar o Sass
gulp.task('sass', function () {
    gulp.src('./sass/*.scss')
				.pipe(plumber())
		        .pipe(sass())
		        .pipe(gulp.dest('./'))
})
gulp.task('watch:sass', () => {
	gulp.watch(['../**/*.scss'], ['sass'])
})




gulp.task('img', function() {
	del('img/*')
	gulp.src('../cbrh/img/*.{png,jpg,gif}')
		.pipe(imagemin({
			optimizationLevel: 7,
			progressive: true
		}))
		.pipe(gulp.dest('img'))
});
gulp.task('watch:img', () => {
	gulp.watch(['../cbrh/img/*.{png,jpg,gif}'], ['img'])
})


gulp.task('flags', function() {
	del('../cbrh/img/flags/*')
	gulp.src('./flags/*.{png,jpg,gif}')
		.pipe(imagemin({
			progressive: true
		}))
		.pipe(gulp.dest('../cbrh/img/flags'))
});
gulp.task('watch:flags', () => {
	gulp.watch(['./flags/*.{png,jpg,gif}'], ['flags'])
})




gulp.task('minify-css', () => {
	gulp.src('**/*.css')
		.pipe(cleanCSS({compatibility: 'ie8'}))
		.pipe(gulp.dest('./'))
})
gulp.task('watch:minify-css', () => {
	gulp.watch(['**/*.css'], ['minify-css'])
})




gulp.task('eslint', () => {
    gulp.src(['js/functions.js'])
		.pipe(plumber())
        .pipe(eslint({
					  "plugins": [
					    "snakecase"
					  ],
					  "rules": {
					  	"camelcase":2,
					    "snakecase/snakecase": 2
					  }
					}))
        .pipe(eslint.format())
        .pipe(eslint.failAfterError());
})



gulp.task('default', [
						'img'
						,'sass'
						,'minify-css'
						,'flags'
						// ,'eslint'

						,'watch:sass'
						,'watch:img'
						// ,'watch:minify-css'
						,'watch:flags'

					])
