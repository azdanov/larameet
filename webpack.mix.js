const mix = require("laravel-mix");
require("laravel-mix-tailwind");

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

mix.js("resources/js/app.js", "public/js");
mix.sass("resources/sass/app.scss", "public/css").tailwind();
mix.version();

/*
|-----------------------------------------------------------------------
| BrowserSync
|-----------------------------------------------------------------------
|
| BrowserSync refreshes the Browser if file changes (js, sass, php) are | detected.
| Proxy specifies the location where the app is located.
*/
// mix.browserSync({
//     proxy: "http://larameet.test",
//     host: "localhost",
//     open: false,
//     watchOptions: {
//         usePolling: true
//     }
// });
