<?php get_header(); ?>
<div class="row">
	<div class="span12" id="main-col">
		<div class="hero-unit">
			<h1>Page Not Found</h1>
			<h2>Error 404</h2>
			<p>Sorry, but the page you are looking for appears to be missing. The internet is a very large place. Maybe it will turn up one day.</p>
			<p>Why not return to the <a href="<?php echo home_url( '/' ); ?>" title="Home">homepage</a> or searching below for what you were looking for:</p>
			<?php get_search_form(); ?>
		</div>
	</div>	
</div>
<?php get_footer(); ?>