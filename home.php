<?php
  get_header();
?>

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

      if( $query->have_posts() ):
        while( $query->have_posts() ):
          $query->the_post();
          ?>
          <article class="col-4">
            <h2><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
            <?=the_post_thumbnail()?>
          </article>
        <?php
        endwhile;
      endif;

      // Restore original Post Data
      wp_reset_postdata();
    ?>
  </div>
</div>

<h1>Page d'accueil</h1>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>

      <div>
        <?php the_post_thumbnail(); ?>
      </div>
      <h2><a href="<?php echo get_the_permalink() ?>"><?php the_title(); ?></a></h2>
      <p><?php the_content(); ?></p>
      <i><?php the_date(); ?></i>
<?php
    endwhile;
  endif;
?>

<?php
  get_footer();
?>
