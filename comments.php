<div class="well comments-wrap">
	<?php if ( have_comments() ) { ?>
		<?php wpstrap_comments_title(); ?>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>		
				<ul class="pager">
					<li class="previous">
						<?php previous_comments_link('&lt; Older Comments'); ?>
					</li>
					<li class="next">
						<?php next_comments_link('Newer Comments &gt;'); ?>
					</li>
				</ul>				
			<?php } ?>
			<ol class="comments-list">
				<?php wp_list_comments(); ?>
			</ol>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>		
				<ul class="pager">
					<li class="previous">
						<?php previous_comments_link('&lt; Older Comments'); ?>
					</li>
					<li class="next">
						<?php next_comments_link('Newer Comments &gt;'); ?>
					</li>
				</ul>				
			<?php } ?>
	<?php } ?>
	<?php if ( ! comments_open() ) { ?>
		<div class="alert">Sorry, comments on this <?php echo $post->post_type; ?> are now closed.</div>
	<?php } ?>
	<div class="comments-form">
		<?php
		$args = array( 
			'fields' 				=> apply_filters( 
										'comment_form_default_fields', 
										array(
										    'author'	=> '<label for="author">Name' . ( $req ? ' *' : '' ) . '</label><input class="span4" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1" />',
										    'email'  	=> '<label for="email">Email' . ( $req ? ' *' : '' ) . '</label><input class="span4" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" tabindex="2" />',
										    'url'    	=> '<label for="url">Website</label><input class="span4" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />' 
									    ) 
			 ),
		    'comment_field'			=> '<label for="comment">Comment *</label><textarea class="span8" id="comment" name="comment" tabindex="4" aria-required="true"></textarea>',
		    'must_log_in' 			=> '<p class="must-log-in">' .  sprintf( 'You must be <a href="%s" title="Login">logged in</a> to post a comment.' , wp_login_url( apply_filters( 'the_permalink', get_permalink( $post->ID ) ) ) ) . '</p>',
		    'logged_in_as' 			=> '<p class="logged-in-as">' . sprintf( 'Logged in as <a href="%s">%s</a>. <a title="Log out of this account" href="%s">Log out?</a></p>' , 
		    admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post->ID  ) ) ) ),
		    'comment_notes_before' 	=> '<p class="comment-notes">Your email address is <em>never</em> published nor shared.' . ( $req ? ' Required fields are marked with a *' : '' ) . '.</p>',
		    'comment_notes_after'	=> '<p>You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:</p><code>' . allowed_tags() . '</code>',
		    'id_form' 				=> 'commentform',
		    'id_submit' 			=> 'submit',
		    'title_reply' 			=> 'Leave a Reply',
		    'title_reply_to' 		=> 'Leave a Reply to %s',
		    'cancel_reply_link'		=> 'Cancel reply',
		    'label_submit' 			=> 'Post Comment'
	    ); 
	    ?>
		<?php comment_form( $args ); ?>
	</div>
</div>