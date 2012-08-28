<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main' ); ?>" id="main-col">
		<h1>
			<?php if(have_posts()) the_post(); ?>
			<?php if(is_day()) : ?>
				<?php echo "Blog Archive: ".get_the_date('jS F Y'); ?>
			<?php elseif ( is_month() ) : ?>
				<?php echo "Blog Archive: ".get_the_date('F Y'); ?>
			<?php elseif ( is_year() ) : ?>
				<?php echo "Blog Archive: ".get_the_date('Y'); ?>
			<?php else : ?>
				<?php echo "Blog Archive"; ?>
			<?php endif; ?>
			<?php rewind_posts(); ?>
		</h1>
		<hr class="page-title-sep">
		<?php get_template_part( 'loop' ); ?>
	</div>	
	<div class="span<?php wpstrap_col_width( 'sidebar' ); ?>" id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>