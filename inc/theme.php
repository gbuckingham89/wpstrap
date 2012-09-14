<?php
/**
 * Enqueue comments reply JS
 */
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

/**
 * Define content_width (equal to full width page at largest responsive size)
 */
if ( ! isset( $content_width ) ) $content_width = 1170;

/**
 * wp_link_pages wrapper
 */
function wpstrap_link_pages() {
	
	// Set args and get standard WP markup for wp_link_pages
	$args = array(
		'before' 			=> '<hr /><div class="pagination"><ul><a href="#">Page:</a>',
		'after' 			=> '</ul></div><hr />',
		'next_or_number' 	=> 'number',
		'pagelink' 			=> '%',
		'echo' 				=> 0
	);
	$page_links = wp_link_pages( $args );	
	
	// Wrap linked page numbers elements with li
	$page_links = str_ireplace( '</a>', '</a></li>', str_ireplace( '<a', '<li><a', $page_links ) );
	
	// Add disabled class to first link element
	$page_links = str_ireplace( '<ul><li><a', '<ul><li class="disabled"><a onclick="return false;"', $page_links );
		
	// Wrap non-linked page numbers with <li> and <a> (in middle)
	$page_links = preg_replace( '^\<\/li\>\s(\d)\s\<li\>^', '</li><li class="active"><a href="">${1}</a></li><li>', $page_links) ;
	
	// Wrap non-linked page numbers with <li> and <a> (at end)
	$page_links = preg_replace( '^\<\/li\>\s(\d)\<\/ul\>^', '</li><li class="active"><a href="">${1}</a></li></ul>', $page_links );
	
	// Add title tag to all link elements
	$page_links = preg_replace( '^"\>(\d)\<\/a\>^', '" title="Page ${1}">${1}</a>', $page_links );
	
	// Display the page links
	echo $page_links;
	
}

/**
 * Add editor stylesheet
 */
add_editor_style('editor-style.css');

/**
 * Add feed links
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Add support for thumbnails to posts
 */
add_theme_support( 'post-thumbnails', array( 'post' ) );  

/**
 * Add image size for post thumbails in the loop
 */
add_image_size( 'featured-loop', 200, 151, true );

/**
 * Modify password protected post form
 */
function wpstrap_password_protected_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $output = '<div class="alert alert-error alert-block"><p><strong>Sorry, this ';
    if( $post->post_type == 'page' ) {
	    $output .= 'page';
    }
    else if( $post->post_type == 'post' ) {
	    $output .= 'post';
    }
    $output .= ' is password protected.</strong> To view it, please enter the required password below.</p><br /><br />&nbsp;<form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post" class="form-inline" style="margin-bottom:0;"><label for="' . $label . '">Password: <input name="post_password" id="' . $label . '" type="password" size="20" /></label> <button name="Submit" value="1" class="btn">Submit</button></form></div>';
    return $output;
}
add_filter( 'the_password_form', 'wpstrap_password_protected_form' );


/**
 * Draw comment section title
 */
function wpstrap_comments_title() {
	$num_comments = get_comments_number();
	echo '<h3 class="comments-list-title">' . $num_comments . ' Comment';
	if($num_comments!=1) {
		echo 's';
	}
	echo '</h3>';
} 

 
/**
 * Register widget area(s)
 */
function wpstrap_register_widgets() {
	register_sidebar( array(
		'name' 			=> 'Sidebar Widgets',
		'id' 			=> 'sidebar-widgets',
		'before_title' 	=> '<h4>',
		'after_title' 	=> '</h4>'
	) );
}
add_action( 'widgets_init', 'wpstrap_register_widgets' );


/**
 * Registers and enqueues JavaScript files for the front end.
 */
function wpstrap_scripts() {

	// Dergisters & register JavaScript files
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.7.2.min.js' );
    wp_register_script( 'wpstrap-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js') ;
    
    // Enqueue JavaScript files
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'wpstrap-bootstrap' );
    
    // Register CSS files
    wp_register_style( 'wpstrap-style', get_bloginfo( 'stylesheet_url' ) );
    
    // Enqueue CSS files
    wp_enqueue_style( 'wpstrap-style' );  
    
}   
add_action( 'wp_enqueue_scripts', 'wpstrap_scripts' );

/**
 * Increase excerpt length
 */
function wpstrap_excerpt_length( $length ) {
	return 68;
}
add_filter( 'excerpt_length', 'wpstrap_excerpt_length', 999 );


/**
 * Register nav menus
 */
register_nav_menu( 'header-menu', 'Header Menu' );


/**
 * Calculates layout column widths
 */
function wpstrap_col_width( $col ) {
	
	$sidebar_size = wpstrap_opt( 'sidebar_size' );
	
	if( $col == 'main-full' ) {
		echo 12;
	}
	elseif( $col == 'main' && $sidebar_size == 'small' ) {
		echo 10;
	}
	elseif( $col == 'main' && $sidebar_size == 'large' ) {
		echo 8;
	}
	elseif( $col == 'main' ) {
		echo 9;
	}
	elseif( $col == 'sidebar' && $sidebar_size == 'small' ) {
		echo 2;
	}
	elseif( $col == 'sidebar' && $sidebar_size == 'large' ) {
		echo 4;
	}
	elseif( $col == 'sidebar' ) {
		echo 3;
	}
}


/*
 * Show an alert if the post is over a eyar old
 */
function wpstrap_old_warning() {	
	if( wpstrap_opt( 'show_old_post_warning' ) ) {
		$stamp = strtotime( get_the_date( 'Y-m-d' ) );
		if( $stamp <= ( time() - 31536000 ) ) {
			echo '<div class="alert"><strong>Please Note:</strong> This post is over a year old, any information within it may be out-of-date.</div>';
		}
	}
}


/**
 * Draw breadcrumbs
 */
function wpstrap_breadcrumbs( $type ) {
	switch( $type ) {
		case "page":
			wpstrap_breadcrumbs_page();
			break;
	}
}


/**
 * Draw breadcrumbs for pages
 */
function wpstrap_breadcrumbs_page() {
	global $post;
	$current_page = $post;
	$show_breadcrumbs = wpstrap_opt( 'show_page_breadcrumbs' );
	if( $show_breadcrumbs == 1 || ( $show_breadcrumbs == 2 && $current_page->post_parent > 0 ) ) {
		echo '<ul class="breadcrumb">';		
			$breadcrumbs = array();		
			while( $current_page->post_parent > 0 ) {			
				$current_page = get_post( $current_page->post_parent );
				$breadcrumbs[] = array(
					'name' 	=> $current_page->post_title,
					'url' 	=> esc_url( get_permalink( $current_page->ID ) )
				);
			}			
			$breadcrumbs = array_reverse( $breadcrumbs );		
			if( is_array( $breadcrumbs ) && count( $breadcrumbs ) ) {
				foreach( $breadcrumbs as $breadcrumb ) {
					echo '<li><a href="' . $breadcrumb['url'] . '" title="' . $breadcrumb['name'] . '">' . $breadcrumb['name'] . '</a> <span class="divider">/</span></li>';
				}
			}		
			echo '<li class="active"><a href="' . esc_url( get_permalink( $post->ID ) ) . '" title="' . $post->post_title . '">' . $post->post_title . '</a></li>';	
		echo '</ul>';		
	}	
}


/**
 * Draw the header search box
 */
function wpstrap_header_search() {
	$position = wpstrap_opt( 'show_header_search' );
	if( $position ) { 
		?>
		<form class="navbar-search pull-<?php echo $position; ?>" method="get" action="<?php echo home_url( '/' ); ?>">
			<input name="s" type="text" class="search-query" placeholder="Search" value="<?php the_search_query(); ?>">
			<button type="submit" class="btn">Search</button>
		</form>				
		<?php
	}
}


/**
 * Draw the header classes
 */
function wpstrap_header_classes() {
	echo 'navbar navbar-fixed-top';
	if( wpstrap_opt( 'header_colour' ) == "black" ) {
		echo ' navbar-inverse';
	}	
}

/**
 * Draw the header menu
 */
function wpstrap_header_menu() {
	$args = array(
	    'theme_location' 	=> 'header-menu',
	    'depth' 			=> 0,
	    'container' 		=> false,
	    'menu_class' 		=> 'nav',
	    'walker' 			=> new WPStrap_Header_Menu_Walker()
	);
	wp_nav_menu( $args );
}


/**
 * Nav menu walker for the header menu to setup drop downs
 */
class WPStrap_Header_Menu_Walker extends Walker_Nav_Menu {

	// Add UL with class frop down down to the next level
	function start_lvl( &$output, $depth ) {
		$output .= '<ul class="dropdown-menu">';
	}

	// Start the menu item
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	
		// If the link title isn't set, use the post title (useful when no menu defined)
		$item->title = empty( $item->title ) ? $item->post_title : $item->title;
		
		// Set default values
		$li_attributes = '';
		$class_names = '';
		$value = '';
		
		// Set the li classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = ( $args->has_children ) ? 'dropdown' : '';
		$classes[] = ( $item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if( $depth >= 1 && $args->has_children ) {
			$classes[] = "dropdown-submenu";
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = str_ireplace( 'current_page_parent', 'active', $class_names ); // Apply active to parent pages
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
		
		// Set the li ID
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		
		// Attach the li to the output
		$output .= '<li' . $id . $value . $class_names . $li_attributes . '>';

		// Setup link attributes if the link has a dropdown submenu
		if( $depth >= 1 && $args->has_children ) {
			$attributes  = !empty( $item->title ) ? ' title="' . esc_attr( $item->title ) .'"' : '';
			$attributes .= !empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : ' href="#"';
			$attributes .= ' tabindex="-1"';
		}
		
		// Setup link attributes if the link doesn't have a dropdown submenu
		else {
			$attributes  = !empty( $item->title ) ? ' title="' . esc_attr( $item->title ) .'"' : '';
			$attributes .= !empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
			$attributes .= !empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
			if( $depth < 1 && $args->has_children ) {
				$attributes .= !empty( $item->url ) ? ' href="#"' : ' href="' . get_permalink($item) . '"';
			}
			else {
				$attributes .= !empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : ' href="' . get_permalink($item) . '"';
			}
			$attributes .= ( $depth < 1 && $args->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';			
		}
				
		// Build the link itself
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $depth < 1 && $args->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;
		
		// Attach the link to the rest of the output
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
	}

	// Draw the menu item
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		
		// If there is't an element, stop!
		if ( !$element ) {
			return;
		}
		
		// Get the id
		$id_field = $this->db_fields['id'];

		// Does the element have children?
		if ( is_array( $args[0] ) ) {
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		}
		elseif ( is_object( $args[0] ) ) {
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
		}
		
		// Start drawing the element
		$cb_args = array_merge( array( &$output, $element, $depth ), $args );
		call_user_func_array(array( &$this, 'start_el' ), $cb_args );
		
		// Get the ID
		$id = $element->$id_field;

		// If its' valid to draw child items
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
		
			// Loop each child at this level
			foreach( $children_elements[$id] as $child ) {
				
				// If we're on a new level, start drawing the new level
				if ( !isset($newlevel) ) {
					$newlevel = true;
					$cb_args = array_merge( array( &$output, $depth ), $args );
					call_user_func_array( array( &$this, 'start_lvl' ), $cb_args );
				}
				
				// Recursive draw the child element
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
				
			}
			
			// Clear up
			unset( $children_elements[$id] );
			
		}
		
		// Draw the end of the child level
		if ( isset( $newlevel ) && $newlevel ){
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}

		// Draw the end of this item
		$cb_args = array_merge( array( &$output, $element, $depth ), $args );
		call_user_func_array( array( &$this, 'end_el' ), $cb_args );

	}

}

/**
 * Re-wrap the header nav menu with the correct div and ul styling
 */
function responsive_wp_page_menu ( $existing_menu ) {
	preg_match( '/^<div class=\"([a-z0-9-_]+)\">/i', $existing_menu, $matches );
    $nav_class = $matches[1];
    $replace = array( '<div class="' . $nav_class . '">', '</div>' );
    $new_menu = str_replace( $replace, '', $existing_menu );
    $new_menu = preg_replace('/^<ul>/i', '<ul class="' . $nav_class . '">', $new_menu);
    return $new_menu;
}
add_filter('wp_page_menu', 'responsive_wp_page_menu');

?>