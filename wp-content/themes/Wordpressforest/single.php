<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class='single_post'>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<div class='single_entry'>
		<em>Article posted on<?php the_time('l, F, jS, Y') ?> at <?php the_time(); ?></em>
		<?php the_content(); ?>
		<?php the_tags(); ?>
		<?php edit_post_link('Edit this post.....','<p>','</p>'); ?>
		
	<?php comments_template(); ?>
	</div>
<?php endwhile; else: ?>
	<h3>Sorry but we could not find what you are looking for.</h3>
	<div><?php get_search_form(); ?></div>
<?php endif; ?>
</div>
