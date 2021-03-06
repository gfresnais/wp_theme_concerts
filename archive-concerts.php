<?php
  get_header();
?>

<h1><?php echo single_cat_title( '', false ) ?></h1>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>
    <hr>
    <div>
      <div class="text-center">
        <img src="<?=get_the_post_thumbnail_url();?>" alt="<?=the_title();?>" class="img-list-posts">
        <h2><a href="<?=get_the_permalink()?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="py-4"><?php the_content(); ?></div>
      <div class="col-12 row">
        <div class="col-3 text-center">
          <p><strong>Date du concert</strong></p>
          <p><?php the_field('date') ?></p>
        </div>

        <div class="col-3 text-center">
          <p><strong>Heure de début</strong></p>
          <p><?php the_field('heure_debut') ?></p>
        </div>

        <div class="col-3 text-center">
          <p><strong>Heure de fin</strong></p>
          <p><?php the_field('heure_fin') ?></p>
        </div>

        <div class="col-3 text-center">
          <p><strong>Lieu du concert</strong></p>
          <p><?php the_field('lieu') ?></p>
        </div>
      </div>
      <i class="col-12">Ajouté le <?php the_date(); ?></i>
    </div>
<?php
    endwhile;
  endif;
?>

<hr>

<?php
  get_footer();
?>
