<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>   
	    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	    <title><?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?> | <?php bloginfo( 'name' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
	    <link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" type="image/x-icon">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href=".<?php bloginfo( 'template_directory' ); ?>/apple-touch-icon-114-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/apple-touch-icon-72-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wpstrap_analytics(); ?>
        <?php wp_head(); ?>        
    </head>    
    <body <?php body_class(); ?>>
		<div class="<?php wpstrap_header_classes(); ?>">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
					<div class="nav-collapse">
						<?php wpstrap_header_menu(); ?>	
						<?php wpstrap_header_search(); ?>				
					</div>					
				</div>
			</div>
		</div>		
		<div class="container">
			