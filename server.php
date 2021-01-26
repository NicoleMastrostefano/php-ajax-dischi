<?php
  include __DIR__ . "/albums.php";
  header('content-type: application/json');
  $genre = strtolower($_GET['genre']);

  if(empty($genre)){
    $filteredAlbums=$albums;
  }else {
    $filteredAlbums=[];

    foreach ($albums as $album) {
      if(strtolower($album["genre"])==$genre){
        $filteredAlbums[]= $album;
      }
    }
  }
  echo json_encode($filteredAlbums);
?>
