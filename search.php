<?php get_header(); ?>

	<div class="basic-back shadow"><p><?php echo '"'.get_search_query().'"： ' .$wp_query->found_posts. ' result(s) matched.';?></p></div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="index-post shadow">

		<?php if(has_post_thumbnail()): ?>
			<div class="index-image">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
			</div>
		<?php else: ?>
			<div class="index-image">
				<img src="<?php echo esc_url( get_theme_file_uri( "img/manafi.jpg" ) ); ?>" alt="<?php the_title(); ?>">
			</div>
		<?php endif; ?>

		<div class="index-title-excerpt">
			<div class="index-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
			<div class="index-excerpt"><p><?php echo the_excerpt(); ?></p></div>
			<div class="index-date"><p><?php echo get_the_date(); ?></p></div>
		</div>

	</div>

	<?php endwhile; endif; ?>

	<?php the_posts_pagination(
		array(
			'mid_size'      => 2,
			'prev_next'     => true,
			'prev_text'     => __( ' < '),
			'next_text'     => __( ' > '),
			'type'          => 'list',
		)
	); ?>

<?php get_footer();