<?php
  get_header();
?>

<h1>Page des concerts</h1>

<?php
  if( have_posts() ):
    while( have_posts() ):
      the_post();
?>

      <div>
        <?php the_post_thumbnail(); ?>
      </div>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
      <i><?php the_date(); ?></i>
      <p><?php the_field('date') ?> €</p>
      <p><?php the_field('heure-debut') ?></p>
      <p><?php the_field('heure-fin') ?></p>
      <p><?php the_field('lieu') ?></p>
      <div>
          <p>Artistes présents :</p>
          <?php 
            $fields = get_field('artistes');
            //var_dump($fields);
            ?>
            <ul>
              <?php
              foreach($fields as $field):
                ?>
                <li>
                  <a href="<?=the_permalink($field)?>">
                    <?=get_the_title($field);?>
                  </a>
                </li>
                <br>
                <?php
                endforeach;
              ?>
            </ul>
      </div>
<?php
    endwhile;
  endif;
?>

<?php
  get_footer();
?>
