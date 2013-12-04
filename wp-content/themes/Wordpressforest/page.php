<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class='static_page'>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<div class='static_content'>
			<?php the_content(); ?>
		</div>
		<?php edit_post_link('Edit this page.....', '<strong>','</strong>'); ?>
	<?php endwhile; else : ?>
	<h2>Page not found!</h2>
	<div><?php get_search_form(); ?></div>
<?php endif; ?>
</div>
<?php get_footer(); ?>