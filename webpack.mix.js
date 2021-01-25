let mix = require('laravel-mix');

mix.js('src/app.js', 'js').vue({ version: 2 })
   .sass('src/app.scss', 'css').options({
      processCssUrls: false // questa opzione fa in modo da non modificare i percorsi delle immagini
});
