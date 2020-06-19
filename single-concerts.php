<?php
  get_header();
?>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>

      <article class="no-gutters py-3">
        <h1 class="col-12 text-center"><?=the_title();?></h1>
        <div class="text-center py-3">
          <img src="<?=get_the_post_thumbnail_url();?>" alt="<?=the_title();?>" 
              class="img-list-posts img-thumbnail">
        </div>

        <div class="text-justify py-3"><?=the_content();?></div>

        <div class="col-12 row">
          <div class="col-3 text-center">
            <p><strong>Date du concert</strong></p>
            <p><?=the_field('date');?></p>
          </div>

          <div class="col-3 text-center">
            <p><strong>Heure de début</strong></p>
            <p><?=the_field('heure_debut');?></p>
          </div>

          <div class="col-3 text-center">
            <p><strong>Heure de fin</strong></p>
            <p><?=the_field('heure_fin');?></p>
          </div>

          <div class="col-3 text-center">
            <p><strong>Lieu du concert</strong></p>
            <p><?=the_field('lieu');?></p>
          </div>
        </div>

        <div class="col-12">
          <h2 class="text-center">Artistes présents</h2>
          <?php 
            $fields = get_field('artistes');
            ?>
            <div class="card-deck justify-content-center">
              <?php
              foreach($fields as $field):
                ?>
                <div class="col-3 card text-center border-0">
                  <img src="<?=get_the_post_thumbnail_url($field)?>" 
                    alt="<?=get_the_title($field)?>" class="card-img-top">
                  <div class="card-body">
                    <h3 class="card-title">
                        <a href="<?=get_the_permalink($field)?>" class="stretched-link">
                          <?=get_the_title($field)?>
                        </a>
                    </h3>
                  </div>
                </div>
                <?php
                endforeach;
              ?>
            </div>
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
