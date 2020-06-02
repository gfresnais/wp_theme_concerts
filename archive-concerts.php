<?php
  get_header();
?>

<h1><?php echo single_cat_title( '', false ) ?></h1>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>

      <div>
        <?php the_post_thumbnail(); ?>
      </div>
      <h2><a href="<?=get_the_permalink()?>"><?php the_title(); ?></a></h2>
      <p><?php the_content(); ?></p>
      <i><?php the_date(); ?></i>
      <p><?php the_field('date') ?></p>
      <p><?php the_field('heure-debut') ?></p>
      <p><?php the_field('heure-fin') ?></p>
      <p><?php the_field('lieu') ?></p>
<?php
    endwhile;
  endif;
?>

<?php
  get_footer();
?>
