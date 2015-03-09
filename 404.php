<?php get_header(); ?>

<div class="row" id="post-<?php the_ID(); ?>">
		<div class="col-md-8">
			<h2>Error 404 - Page Not Found</h2>
		</div>

		<aside class="col-md-4" id="sidebar">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
 				<?php endif; ?>
 		</aside>
 	</div>

<?php get_footer(); ?>