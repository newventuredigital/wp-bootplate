<?php get_header(); ?>

	<div class="row" id="post-<?php the_ID(); ?>">
		<div class="col-md-8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				<?php // comments_template(); ?>
			<?php endwhile; endif; ?>
		</div>

		<aside class="col-md-4" id="sidebar">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
 				<?php endif; ?>
 		</aside>
 	</div>

<?php get_footer(); ?>