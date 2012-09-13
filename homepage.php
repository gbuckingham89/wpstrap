<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main' ); ?>" id="main-col">
		<?php if ( have_posts() ) : ?>	
			<?php while ( have_posts() ) : the_post(); ?>				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="hero-unit">
						<h1><?php bloginfo( 'name' ); ?></h1>
						<h2><?php bloginfo( 'description' ); ?></h2>
						<?php the_content(); ?>
						<div class="cl"></div>
					</div>
				</div>				
			<?php endwhile; ?>			
		<?php endif; ?>
	</div>	
	<div class="span<?php wpstrap_col_width( 'sidebar' ); ?>" id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>