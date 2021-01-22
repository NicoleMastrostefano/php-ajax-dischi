<main>
  <div id="wrapper">
      <?php
        foreach ($albums as $album) { ?>
          <div class="card">
            <img src="<?php echo $album['poster']; ?>" alt="">
            <h3><?php echo $album['title']; ?> </h3>
            <h4><?php echo $album['author']; ?></h4>
            <small><?php echo $album['year']; ?></small>
        </div>
        <?php
        }
      ?>
  </div>
</main>
