<?php
  get_header();
?>

<hr>

<div class="row">
  <div class="col-12 row">
    <h2 class="col-12 text-center">Derniers concerts</h2>
    <?php
      $args = array(
          'post_type' => array( 'concerts' ),
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC'
      );

      $query = new WP_Query($args);
      ?>
      <div class="card-deck justify-content-center">
        <?php
        
        if( $query->have_posts() ):
          while( $query->have_posts() ):
            $query->the_post();
            ?>
            <div class="col-4 card text-center border-0">
              <img src="<?=get_the_post_thumbnail_url()?>" 
                alt="<?=get_the_title()?>" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">
                    <a href="<?=get_the_permalink()?>" class="stretched-link">
                      <?=get_the_title()?>
                    </a>
                </h3>
              </div>
            </div>
          <?php
          endwhile;
        endif;

        ?>
      </div>
      <?php

      // Restore original Post Data
      wp_reset_postdata();
    ?>
    <div class="offset-8 col-4 row">
      <a href="/concerts">Voir tous les concerts</a>
    </div>
  </div>
</div>

<hr>

<h1 class="text-center col-12">Page d'accueil</h1>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>

      <div>
        <?php the_post_thumbnail(); ?>
      </div>
      <h2><a href="<?php echo get_the_permalink() ?>"><?php the_title(); ?></a></h2>
      <div><?php the_content(); ?></div>
      <i>Rédigé le <?php the_date(); ?></i>
<?php
    endwhile;
  endif;
?>

<hr>

<?php
  get_footer();
?>
