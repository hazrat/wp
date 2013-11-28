<?php
if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) ){
	die('Please do not load this page directly');
}
if(post_password_required()){
	?>
	<p>This post is password protected.</p>
	<?php return; } ?>

	<?php
//Display the comment loop
	if(have_posts()) : 
		?>
	<h2><?php comments_number('Be the first to comment', 'One Comment', '% Comments'); ?></h2>
	<ol id='comments_section'></ol>
	<?php wp_list_comments(array('avatar_size'=>80, 'reply_text'=>'Reply to this comment.')); ?>
</ol>
<div><?php paginate_comments_links(); ?></div>
<?php
else ://if no comments so far
?>

<?php if('open' == $post->comment_status) : ?>
	<p>Have your say!</p>
<?php else : ?>
	<p>Comments currently closed!</p>
<?php endif; ?>
<?php endif; ?>
<?php if('open' == $post->comment_status) : ?>

	<div id='respond'>
		<h2><?php comment_form_title(); ?></h2>

		<div id='cancel-comment-reply'>
			<small><?php cancel_comment_reply_link(); ?></small>
		</div>

		<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be logged in to comment</p>
	<?php else : ?>
	<form action="<?php echo get_option('site_url'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if($user_ID) :?>
		<p>Logged in as <a href="<?php echo get_option('site_url'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?><a></p>
	<?php else : ?>
	<p><input type='text' name='author' id='author' value="<?php echo $comment_author_url; ?>" />
		<label for='author'>Name</label></p>
		<p><input type='text' name='email' id='email' value='<?php echo $comment_author_email;?>' />
			<label for='email'> Mail <?php if($req) echo '(Required field)' ;?></label>
		</p>
		<input type='text' name='url' id='url' value="<?php echo $comment_author_url; ?>" />
		<label for='url'>Website</label>
	</p>

	<?php endif; ?>
	<div><?php comment_id_fields(); ?>
		<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>" />
	</div>
	<p><textarea id='comment' name='comment' cols='50' rows='10'></textarea></p>
	<?php  if(get_option('comment_moderation') == '1'){ ?>
	<p>Comment moderation is enabled, no need to resubmit any comments posted.</p>
	<?php } ?>
		<p><input type='text' name='submit' id='submit' value='Submit' /></p>
		<?php do_action('comment_form',$post->ID); ?>
	</form>
<?php endif; ?>
</div>
<?php endif; ?>