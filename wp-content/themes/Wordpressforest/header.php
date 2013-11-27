<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='<?php bloginfo('html_type');?>;charset=<?php bloginfo('charset');?>'/>


	<title><?php bloginfo('name');?><?php wp_title('||');?></title>
	<link rel="stylesheet"  href='<?php bloginfo("stylesheet_url");?>' type='text/css' media='screen' />
</head>
<body>
	<div id='wrap'>
		<!---Begin Header-->
		<div id='header'>
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name');?></a></h1>
			<div class='tagline'><?php bloginfo('description'); ?></div>
			<ul id='navbar'> <?php wp_list_pages('title_li='); ?></ul>
		</div>
		<!---End Header-->