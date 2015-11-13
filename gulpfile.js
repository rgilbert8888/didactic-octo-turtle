'use strict';

var gulp = require('gulp'),

//import node modules

	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps'),
	del = require('del');

// make app.js

gulp.task("concatScripts", function(){
	return gulp.src(['js/aslider.js',
		'gen_validatorv4.js',
		'js/main.js',     // return - for tasks that depend on this task
		'js/anotherfile.js'])
		.pipe(maps.init())  
		.pipe(concat("app.js")) 
		.pipe(maps.write('./'))   //path to same directory as app.js 
		.pipe(gulp.dest("js"))
});

// minify app.js

gulp.task("minifyScripts", ['concatScripts'], function(){
	return gulp.src("js/app.js")
		.pipe(uglify())
		.pipe(rename("app.min.js"))
		.pipe(gulp.dest("js"))
});

// compile sass to css 

gulp.task("compileSass", function(){
	return gulp.src("styles/main.scss")
		// .pipe(maps.init())          // uncomment if need to re-create sourcemap
		.pipe(sass())
		// .pipe(maps.write('./'))     // uncomment if need to re-create sourcemap
		.pipe(gulp.dest("styles"))
});

// watch sass

gulp.task("watchSass", function(){         
	gulp.watch('styles/**/*.scss', ['compileSass']);   // simple globbing pattern to find any files with .scss insde styles
});

// run all building tasks in order of dependence  > gulp build

// gulp.task("build",['minifyScripts', 'compileSass']);  // dont need concatScripts

// then put all stuff in a folder called dist and preserve directory structure

gulp.task("build",['minifyScripts', 'compileSass'], function(){
	return gulp.src(["styles/main.css", "js/app.min.js", "index.php", 
					"images/**", "images_updated/**", "_includes/**", "equipment.json"], { base: './' })          // base preserves directory structure
			.pipe(gulp.dest('dist'));
}); 

// make build the default task  > gulp

gulp.task("default", ["build"]); 


// delete files from past builds/clean 





// TESTS

// gulp.task("hello", function(){
// 	console.log("hello!!");
// });

// gulp.task("default", ["hello"]); 