<?php
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'before_widget' =>'<li>' ,
		'before_widget' =>'</li>' ,
		'before_title' =>'<h2>' ,
		'before_title' =>'</h2>'
	));
}
?>