<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main' ); ?>" id="main-col">
		<h1>Author: 
			<?php
			if(get_query_var('author_name')) {
			    $curauth = get_user_by('slug', get_query_var('author_name'));
			}
			else {
			    $curauth = get_userdata(get_query_var('author'));
			}
			echo $curauth->nickname;
			?>			
		</h1>
		<hr class="page-title-sep">
		<?php get_template_part( 'loop' ); ?>
	</div>	
	<div class="span<?php wpstrap_col_width( 'sidebar' ); ?>" id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>