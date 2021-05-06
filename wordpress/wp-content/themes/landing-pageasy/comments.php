<?php
/**
 * The template for displaying the comments.
 *
 * This contains both the comments and the comment form.
 */
if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments','landing-pageasy'); ?>.</p>
<?php return; } ?>

<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
	<div id="comments">
		<div class="total-comments"><span><?php comments_number(__('No Comments','landing-pageasy'), __('One Comment','landing-pageasy'),  __('% Comments','landing-pageasy') );?></span></div>
		<ol class="commentlist">
			<div class="navigation">
				<div class="alignleft"><?php previous_comments_link() ?></div>
				<div class="alignright"><?php next_comments_link() ?></div>
			</div>
			<?php wp_list_comments('type=comment&callback=landing_pageasy_comment'); ?>
			<div class="navigation bottomnav">
				<div class="alignleft"><?php previous_comments_link() ?></div>
				<div class="alignright"><?php next_comments_link() ?></div>
			</div>
		</ol>
	</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php else : // comments are closed ?>
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
	<div id="commentsAdd">
		<div id="respond" class="box m-t-6">
			<?php global $aria_req; $comments_args = array(
				'title_reply'=>'<h4><span>'.__('Add a Comment','landing-pageasy').'</span></h4></h4>',
				'label_submit' => __('Add Comment','landing-pageasy'),
				'comment_field' => '<p class="comment-form-comment">'.'<textarea id="comment" name="comment" cols="45" rows="5" aria-required="true">Comment</textarea></p>',
				'fields' => apply_filters( 'comment_form_default_fields',
					array(
					'author' => '<p class="comment-form-author">' 
						. ( $req ? '' : '' ) . '<input id="author" name="author" placeholder="Name" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
						
					'email' => '<p class="comment-form-email">' . '' 
						. ( $req ? '' : '' ) . '<input id="email" placeholder="Email" name="email" type="text" value="' . esc_attr ( antispambot( $commenter['comment_author_email'] )) . '" size="30"' . $aria_req . ' /></p>',
						
					'url' => '<p class="comment-form-url">' . '' . 
			'<input id="url" name="url" type="text" placeholder="Website" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>' 
			))
			); 
			comment_form($comments_args); ?>
		</div>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>
