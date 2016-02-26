var elixir = require('laravel-elixir');
//https://www.npmjs.com/package/laravel-elixir-livereload
require('laravel-elixir-livereload');
// https://github.com/postcss/postcss
// https://github.com/peterramsing/lost
// https://www.npmjs.com/package/laravel-elixir-postcss
require('laravel-elixir-postcss');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir.config.sourcemaps = false;

elixir(function(mix) {

 mix
   .copy('resources/bower_box/bootstrap-sass/assets/stylesheets' , 'resources/assets/sass')
   .copy('resources/bower_box/jquery/dist/jquery.js' , 'public/js/vendor')
   .copy('resources/bower_box/velocity/velocity.js' , 'public/js/vendor')
   .copy('resources/bower_box/velocity/velocity.ui.js' , 'public/js/vendor')
   .copy('resources/bower_box/bootstrap-sass/assets/javascripts' , 'public/js/vendor' )
   .copy('resources/assets/js/app.js' , 'public/js/vendor');

   .sass('app.scss')

   .styles(['app.css'] , 'public/css/TmgStyles.css' , 'public/css')

   .scripts([ 'jquery.js' , 'velocity.js' , 'velocity.ui.js' ,'bootstrap.js' , 'app.js'] , 'public/js/TmgScripts.js' , 'public/js/vendor')

   .version('public/css/TmgStyles.css')

   .livereload();
});

// gulp --production