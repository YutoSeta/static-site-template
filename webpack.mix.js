const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.postCss("resources/styles/_app.css", "resources/styles/app.css", [
        require("tailwindcss"),
]);
mix.js("resources/scripts/_app.js", "resources/scripts/app.js");