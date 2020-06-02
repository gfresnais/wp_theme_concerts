<?php
  get_header();
?>

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
      <p><?php the_field('prix') ?> €</p>
      <p>Destination : <?php the_field('destination') ?></p>
      <div>
          <?php 
            $fields = get_field('points_dinteret');
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
