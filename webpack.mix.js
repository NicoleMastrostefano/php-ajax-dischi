let mix = require('laravel-mix');

mix.sass('src/app.scss', 'css').options({
    processCssUrls: false // questa opzione fa in modo da non modificare i percorsi delle immagini
});
