<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
?>


<?php

// is active custom post fields plugin

if( function_exists('get_field') )  {

	$start_date = get_field('start_time');
	$end_date = get_field('end_time');

} else {

	$start_date = date('d/m/Y g:i a',strtotime(get_post_meta(get_the_ID(), 'start_time', true)));
	$end_date = date('d/m/Y g:i a',strtotime(get_post_meta(get_the_ID(), 'end_time', true))); 
}

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide events">

		<div class="time-events grid">

		<?php 
			if (!empty($start_date)) {
				echo '<div class="col-6_sm-12"><h5>' . esc_html__( 'Start Event: ', 'twentytwentyone' ) . $start_date . '</h5> </div>'; 
			}

			if (!empty($end_date)) {
				echo '<div class="col-6_sm-12"><h5>' . esc_html__( 'End Event: ', 'twentytwentyone' ) . $end_date . '</h5> </div>';  
			}
		?>

		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
