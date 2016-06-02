<!-- Blog Post -->

<!-- Title -->
<?php
  if (!empty($posts)) {
      foreach($posts as $post){ ?>
          <h2><?php echo $post->post_title ?></h2>
          <p class="lead">
              August 2013 by <a href="#">Start Bootstrap</a>
          </p>

          <hr>

          <!-- Preview Image -->
          <img class="img-responsive" src="http://placehold.it/900x300" alt="">

          <hr>
            <p class="lead">
                <?php echo $post->post_description ?>
            </p>


      <?php  }
  }

echo $this->pagination->create_links();
?>

