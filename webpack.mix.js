const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
	.js('resources/js/concierto/concierto.js', 'public/js/concierto/')
	.js('resources/js/eventos/eventos.js', 'public/js/eventos/')
	.js('resources/js/formularios/formularios.js', 'public/js/formularios/')
	.js('resources/js/general/deleteConfirmation.js', 'public/js/general/')
	.js('resources/js/general/ajaxSearch.js', 'public/js/general')
	.js('resources/js/general/ajaxPagination.js', 'public/js/general')
	.sass('resources/sass/app.scss', 'public/css')
	.sass('resources/sass/formularios/formulario.scss', 'public/css/formularios/')
	.sass('resources/sass/concierto/concierto.scss', 'public/css/concierto/')
	.sass('resources/sass/eventos/eventos.scss', 'public/css/eventos/');
