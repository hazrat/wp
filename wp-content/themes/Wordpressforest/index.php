<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='<?php bloginfo('html_type');?>;charset=<?php bloginfo('charset');?>'/>


	<title><?php bloginfo('name');?></title>
	<link rel="stylesheet"  href='<?php bloginfo("stylesheet_url");?>' type='text/css' media='screen' />
</head>
<body>
	<div id='wrap'>
		<!---Begin Header-->
		<div id='header'>
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name');?></a></h1>
			<div class='tagline'><?php bloginfo('description'); ?></div>
		</div>
		<!---End Header-->

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

		<!--Begin Footer-->
		<div id='footer'>
			<p><?php bloginfo('name'); ?> is proudly powered by <a href='http://wordpress.org'>Wordpress</a> | <a href="<?php bloginfo('comments_rss2_url');?>">Full post RSS</a> and <a href="<?php bloginfo('comments_rss2_url');?>">Comments RSS</a>.</p>
		</div>
		<!--End Footer-->

</div>

</body>
</html>  