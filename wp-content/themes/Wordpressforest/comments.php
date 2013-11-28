
<?php if(!empty($post->post_password)) : ?>
	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->password) : ?>
	<p>Password protected post, please enter valid password to view comments!</p>
<?php endif; ?>
<?php endif; ?>

<?php if($comments) :?>
	<ol id='comments'>
		<?php foreach ($comments as $comment) : ?>
		<li id='comment-<?php comment_ID(); ?>'>
			<?php if($comment->comment_approved = '0') :?>
			<p>Your comment is undergoing moderation.</p>
		<?php endif; ?>
		<?php echo get_avatar($author_email, $size, $default_avatar ); ?> 
		<?php comment_text(); ?>
		<p><?php comment_author_link(); ?> on <?php comment_date(); ?></p>
	</li>
<?php endforeach; ?>
</ol>
<?php else : ?>
	<p>Be the first to comment!</p>
<?php endif; ?>

<?php if(comments_open()) : ?>  
	<?php if(get_option('comment_registration') && !$user_ID) : ?>  
	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">  
		<?php if($user_ID) : ?>  
		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
	<?php else : ?>  
	<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />  
		<label for="author"><small>Name <?php if($req) echo "(required)"; ?></small></label></p>  
		<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />  
			<label for="email"><small>Mail (will not be published) <?php if($req) echo "(required)"; ?></small></label></p>  
			<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />  
				<label for="url"><small>Website</small></label></p>  
			<?php endif; ?>  
			<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>  
			<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />  
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
				<?php do_action('comment_form', $post->ID); ?>  
			</form>  
		<?php endif; ?>  
	<?php else : ?>  
	<p>The comments are closed.</p>  
<?php endif; ?>