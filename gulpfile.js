var elixir = require('laravel-elixir');
//https://www.npmjs.com/package/laravel-elixir-livereload
require('laravel-elixir-livereload');
// https://github.com/postcss/postcss
// https://github.com/peterramsing/lost
// https://github.com/JeffreyWay/laravel-elixir-stylus
require('laravel-elixir-stylus');


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
   .copy('resources/bower_box/typographic/stylus/typographic.styl' , 'resources/assets/stylus')
   .copy('resources/bower_box/normalize.styl/normalize.styl' , 'resources/assets/stylus')
   .copy('resources/bower_box/jquery/dist/jquery.js' , 'public/js/vendor')
   .copy('resources/bower_box/velocity/velocity.js' , 'public/js/vendor')
   .copy('resources/bower_box/velocity/velocity.ui.js' , 'public/js/vendor')
   .copy('resources/bower_box/bootstrap-stylus/js/*.js' , 'public/js/vendor')
   .copy('resources/assets/js/app.js' , 'public/js/vendor')

   .stylus('normalize.styl')
   .stylus('app.styl', null, {
            use: [
                require('poststylus')(['lost'])
            ]
    })

   .styles([ 'normalize.css' , 'app.css'] , 'public/css/TmgStyles.css' , 'public/css')

   .scripts([ 'jquery.js' , 'velocity.js' , 'velocity.ui.js' , 'app.js'] , 'public/js/TmgScripts.js' , 'public/js/vendor')

   .version('public/css/TmgStyles.css')

   .livereload();
});

// gulp --production