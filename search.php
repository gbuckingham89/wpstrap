<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main' ); ?>" id="main-col">
		<h1>Search Results: <?php echo get_search_query(); ?></h1>
		<hr class="page-title-sep">
		<?php if ( have_posts() ) { ?>
			<?php get_template_part( 'loop' ); ?>
		<?php } else { ?>
			<div class="alert">Sorry, but nothing matched your search criteria. Please try again with some different keywords.</div>
			<?php get_search_form(); ?>
		<?php } ?>
	</div>	
	<div class="span<?php wpstrap_col_width( 'sidebar' ); ?>" id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>