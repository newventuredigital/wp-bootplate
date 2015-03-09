<?php get_header(); ?>

	<div class="row" id="post-<?php the_ID(); ?>">
		<div class="col-md-8">	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
				<div class="excerpt">
					<p>
					<?php echo excerpt(36); ?>
					</p>
				</div>

			<?php endwhile; ?>

			<?php else : ?>
				<h2>Not Found</h2>
			<?php endif; ?>

		</div>

		<aside class="col-md-4" id="sidebar">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
 				<?php endif; ?>
 		</aside>
 	</div>

<?php get_footer(); ?>