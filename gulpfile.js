var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');
require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.stylus('main.styl')
       .styles([
				'bootstrap.min.css',
				'icons-font.css',
				'main.css'
				], 'public/css/all.css','public/css')
       .scripts([
		       	'jquery.min.js',
		       	'bootstrap.min.js',
		       	'custom.js'
		       	], '/public/js/all.js', '/public/js')
		.version(['public/css/all.css', 'public/js/all.js']);
    
    mix.livereload(['public/**/*', 'resources/views/**/*']);
});