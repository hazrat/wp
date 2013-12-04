<?php 
/*
Plugin Name: My promotion plugin
plugin URI: http://themeforest.net
Description: A plugin to promote each article
vesion: 1.0
author: drew douglass
author uri: http://dev-tips.com
*/
function dd_basic_promote($content){
	echo $content;
	if (is_single()) {
?>
<div class='promote'>
	<h2>Enjoy this article</h2>
	<p>If you have enjoyed this article consider subscribing to our <a href="<?php bloginfo('rss2_url');?>">RSS Feed</a></p>
</div>
<?php
	}
}
add_filter('the_content', 'dd_basic_promote');
?>