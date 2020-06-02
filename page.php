<?php
  get_header();
?>

<a href="https://codex.wordpress.org/The_Loop">The Loop</a>
<br>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>

      <div>
        <?php the_post_thumbnail(); ?>
      </div>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <i><?php the_date(); ?></i>
<?php
    endwhile;
  endif;
?>


<?php
  get_footer();
?>
