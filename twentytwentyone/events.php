<?php
/*
Template Name: Custom Events Template
*/ 

get_header(); ?>



	<div id="primary" class="content-area">
		<div class="content alignwide events">

		<?php

		$innovecs_all_query = new WP_Query(array('post_type'=>'events', 'post_status'=>'publish', 'posts_per_page'=> 10)); ?>

		<?php if ( $innovecs_all_query->have_posts() ) : ?>

		<ul>

			<!-- the loop -->
			<?php while ( $innovecs_all_query->have_posts() ) : $innovecs_all_query->the_post(); ?>

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

			<div class="grid">

			<div class="col-12"><h4 style="margin: 20px 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></div>

			<div class="col-5_sm-12"><?php  the_post_thumbnail(array(500, 500), array('class' => 'img-responsive'));?></div>

			<div class="col-7_sm-12">

			<?php 
				if (!empty($start_date)) {
					echo '<h5 style="margin-bottom: 20px;" >' . esc_html__( 'Start Event: ', 'twentytwentyone' ) . $start_date . '</h5>'; 
				}

				if (!empty($end_date)) {
					echo '<h5 style="margin-bottom: 20px;" >' . esc_html__( 'End Event: ', 'twentytwentyone' ) . $end_date . '</h5>';  
				}
			?>

			<?php the_content(); ?>

			</div>

			</div>

			<?php endwhile; ?>
			<!-- end of the loop -->

		</ul>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php esc_html__( 'Sorry, we don’t have posts according to your request' ); ?></p>
		<?php endif; ?>


		</div>
	</div>

<?php get_sidebar(); ?> 
<?php get_footer(); ?>