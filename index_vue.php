<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title></title>
  </head>
  <body>
    <div id="app">
      <?php include __DIR__ . '/partials/header.php'; ?>
        <main>
      <div id="select">
        <select name="genre"v-model="genre">
         <option value="">All</option>
          <option value="Rock">Rock</option>
          <option value="Pop">Pop</option>
          <option value="Jazz">Jazz</option>
          <option value="Metal">Metal</option>
        </select>
        <button type="button" name="button"@click="filtra">Filtra</button>
      </div>
        <div id="wrapper">
          <div class="card"v-for="album in albums">
            <img :src="album.poster" alt="">
            <h3>{{ album.title}}</h3>
            <h4>{{ album.author}}</h4>
            <small>{{ album.year}}</small>
            <small>{{ album.genre}}</small>
          </div>
        </div>
      </main>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
