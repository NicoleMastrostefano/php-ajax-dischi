<main>
  <div id="wrapper">
      <?php
        foreach ($albums as $album) { ?>
          <div class="card">
          <img src="<?php echo $album['poster']; ?>" alt="">  </div>
        <?php
      }
      ?>

  </div>
</main>
