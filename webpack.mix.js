const mix = require('laravel-mix');

mix.webpackconfig({
    stats: {
        children : true,
    },
});

mix.js('resources/js/app.js' , "public/js")
