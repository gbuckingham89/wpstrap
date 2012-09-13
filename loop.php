<?php if ( have_posts() ) : ?>	
	<?php while ( have_posts() ) : the_post(); ?>				
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php wpstrap_loop_header( $post->post_type ); ?>
			<div class="wysiwyg">
				<?php the_excerpt(); ?>
			</div>				
		</div>
		<hr class="cl" />
	<?php endwhile; ?>	
	<ul class="pager">
		<li class="previous">
			<?php next_posts_link( '&lt; Older Posts' ); ?>
		</li>
		<li class="next">
			<?php previous_posts_link( 'Newer Posts &gt;' ); ?>
		</li>
	</ul>				
<?php endif; ?>