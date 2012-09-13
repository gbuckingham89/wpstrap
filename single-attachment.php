<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main' ); ?>" id="main-col">
		<?php if ( have_posts() ) : ?>	
			<?php while ( have_posts() ) : the_post(); ?>				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php wpstrap_single_header( $post->post_type ); ?>
					<?php wpstrap_old_warning(); ?>
					<div class="wysiwyg">
						<?php the_content(); ?>
						<div class="cl"></div>
					</div>	
					<?php wpstrap_link_pages(); ?>	
					<?php 
					if( !post_password_required() && wpstrap_opt( 'show_attachment_comments' ) == '1' ) { 
						comments_template();
					}
					?>
				</div>				
			<?php endwhile; ?>			
		<?php endif; ?>
	</div>	
	<div class="span<?php wpstrap_col_width( 'sidebar' ); ?>" id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>