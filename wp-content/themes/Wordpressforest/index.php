
<?php get_header(); ?>
<?php get_sidebar(); ?>
		<!---Begin Content-->
		<?php if(have_posts()) : ?>
		<?php while (have_posts()) : the_post() ?> 
		<div class='post_snippet'>
			<h2><a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content('continue Reading....'); ?>
		</div>
		<?php endwhile; ?>
		<p><?php previous_posts_link('previous Entries'); ?><?php next_posts_link('Older Entries');?> </p>
	<?php else :?>
	<h2> Sorry but we could not find what you were looking for. But don't give up, keep at it! </h2>
		<?php endif; ?>
		<!--End content-->

		<?php include(TEMPLATEPATH . '/footer.php'); ?>