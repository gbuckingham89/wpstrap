<?php
/**
 * Single post header
 */
function wpstrap_single_header( $type ) {
	$something_shown = false;
	?>
	<h1 class="post-title"><?php the_title(); ?></h1>
	<?php if( wpstrap_opt( 'show_' . $type. '_date_time' ) || wpstrap_opt( 'show_' . $type. '_author' ) ) { ?>
		<p class="post-title-meta">
			<?php 
			if( wpstrap_opt( 'show_' . $type. '_date_time' ) ) { 
				$something_shown = true;					
				echo '<i class="icon-calendar"></i> ';
				if( wpstrap_opt( 'show_' . $type. '_date_time' ) == 1) { 
					the_date(); echo ' '; the_time();
				} 
				elseif( wpstrap_opt( 'show_' . $type. '_date_time' ) == 2) {
					the_date();
				}
				elseif( wpstrap_opt( 'show_' . $type. '_date_time' ) == 3) {
					the_time();
				}
			}
			if( wpstrap_opt( 'show_' . $type. '_author' ) ) { 
				if( $something_shown ) {
					$something_shown = true;
					echo ' <span class="sep">|</span> ';
				}
				echo '<i class="icon-user"></i> ';
				the_author_posts_link();
			}
			if( $type == 'post' ) {
				if( $something_shown ) {
					$something_shown = true;
					echo ' <span class="sep">|</span> ';
				}
				echo '<i class="icon-bookmark"></i> ';
				the_category( ', ' );
				if( has_tag() ) { 
					if( $something_shown ) {
						$something_shown = true;
						echo ' <span class="sep">|</span> ';
					}				
					echo '<i class="icon-tags"></i> ';
					the_tags( '' , ', ', '' );
				}
			}
			?>			
		</p>
	<?php } ?>
	<hr class="page-title-sep">
	<?php
}


/**
 * Loop post header
 */
function wpstrap_loop_header( $type = 'post' ) {
	global $post;
	$something_shown = false;
	?>
	<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<?php
	if( has_post_thumbnail( $post->ID ) ) {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) , 'featured-loop' );
		?>
		<a class="thumbnail loop-featured-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<img src="<?php echo $image[0]; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
		</a>
		<?php
	}
	?>
	<?php if( wpstrap_opt( 'show_' . $type. '_date_time' ) || wpstrap_opt( 'show_' . $type. '_author' ) ) { ?>
		<p class="post-title-meta">
			<?php 
			if( wpstrap_opt( 'show_' . $type. '_date_time' ) ) { 
				$something_shown = true;					
				echo '<i class="icon-calendar"></i> ';
				if( wpstrap_opt( 'show_' . $type. '_date_time' ) == '1' ) { 
					the_date(); echo ' '; the_time();
				} 
				elseif( wpstrap_opt( 'show_' . $type. '_date_time' ) == '2' ) {
					the_date();
				}
				elseif( wpstrap_opt( 'show_' . $type. '_date_time' ) == '3' ) {
					the_time();
				}
			}
			if( wpstrap_opt( 'show_' . $type. '_author' ) ) { 
				$something_shown = true;
				if( $something_shown ) {
					echo ' <span class="sep">|</span> ';
				}
				echo '<i class="icon-user"></i> ';
				the_author_posts_link();
			}
			echo '</p>';
			} 
			echo '<p class="post-title-meta">';
			$something_shown = false;
			if( $type = 'post' ) {
				if( $something_shown ) {
					echo ' <span class="sep">|</span> ';
				}
				echo '<i class="icon-bookmark"></i> ';
				$something_shown = true;
				the_category( ', ' );
				if( has_tag() ) { 
					if( $something_shown ) {
						echo ' <span class="sep">|</span> ';
					}	
					$something_shown = true;
					echo '<i class="icon-tags"></i> ';
					the_tags( '' , ', ', '' );
				}
			}
			?>			
		</p>
	<?php
}
?>