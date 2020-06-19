<?php
  get_header();
?>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>
      <article class="row single-post no-gutters py-3">
        <h1 class="col-12 text-center py-3" ><?php the_title(); ?></h1>
        <div>
          <img src="<?=get_the_post_thumbnail_url();?>" alt="<?=the_title();?>" 
              class="img-list-posts img-thumbnail float-right image-wrapper">
          <div class="single-post-content-wrapper text-justify"><?php the_content(); ?></div>
        </div>
        <i class="col-12">Ajouté le <?php the_date(); ?></i>
      </article>
<?php
    endwhile;
  endif;
?>

<?php
  get_footer();
?>
