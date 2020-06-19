<?php

/**
 * Gets the 3 lasts posts
 */
function lasts_posts_func() {
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order' => 'DESC'
	);

	$query = new WP_Query($args);

	ob_start();

	echo '<div class="col-12 row">';
	foreach($query->posts as $post): ?>
		<article class="col-4 row">
			<h2 class="title col-12"><?=get_the_title($post)?></h2>
			<p class="col-12">Rédigé par <?=get_the_author(null, null, $post)?></p>
		</article>
	<?php endforeach;
	echo '</div>';

	$output = ob_get_clean();
	
	return $output;
}

add_shortcode('lasts_posts', 'lasts_posts_func');


/**
 * Gets the 3 lasts artists
 */
function lasts_artists_func() {
	$args = array(
		'post_type' => 'artists',
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order' => 'DESC'
	);

	$query = new WP_Query($args);

	ob_start();

	echo '<div class="card-deck justify-content-center">';
	foreach($query->posts as $post): ?>
		<div class="col-4 card text-center border-0">
            <img src="<?=get_the_post_thumbnail_url($post)?>" 
            alt="<?=get_the_title($post)?>" class="card-img-top">
        	<div class="card-body">
            	<h3 class="card-title">
                    <a href="<?=get_the_permalink($post)?>" class="stretched-link">
                      <?=get_the_title($post)?>
                    </a>
                </h3>
            </div>
        </div>
	<?php endforeach;
	echo '</div>';

	$output = ob_get_clean();
	
	return $output;
}

add_shortcode('lasts_artists', 'lasts_artists_func');

?>