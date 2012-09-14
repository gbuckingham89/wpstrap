<?php
/**
 * Define and return options groups
 */
function wpstrap_options_groups() {
	$groups = array(
		array( 
			'key' 	=> 'generic', 
			'title' => 'Generic Options' 
		),
		array( 
			'key' 	=> 'header', 
			'title' => 'Navbar Options' 
		),
		array( 
			'key' 	=> 'page', 
			'title' => 'Page Options' 
		),
		array( 
			'key' 	=> 'post', 
			'title' => 'Post Options' 
		),
		array( 
			'key' 	=> 'attachment', 
			'title' => 'Attachment Options' 
		)
	);
	return $groups;
}


/**
 * Define and return options
 */
function wpstrap_options( $key = false ) {
	$options = array();
	$options['generic'] = array(	
		array(
			'key' 			=> 'sidebar_size',
			'label' 		=> 'Sidebar size',
			'description' 	=> '',
			'default' 		=> 'medium',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => 'small', 
					'label' => 'Small' 
				),
				array( 
					'value' => 'medium', 
					'label' => 'Medium'
				),
				array( 
					'value' => 'large', '
					label' => 'Large'
				)
			)		
		)
	);
	$options['header'] = array(	
		array(
			'key' 			=> 'show_header_search',
			'label' 		=> 'Show seach box',
			'description' 	=> '',
			'default' 		=> 'right',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => 'right', 
					'label' => 'Yes - Right'
				),
				array( 
					'value' => 'left', 
					'label' => 'Yes - Left'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' 			=> 'header_colour',
			'label' 		=> 'Header colour',
			'description' 	=> '',
			'default' 		=> 'white',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => 'white', 
					'label' => 'White'
				),
				array( 
					'value' => 'black', 
					'label' => 'Black'
				)
			)		
		)
	);
	$options['page'] = array(	
		array(
			'key' 			=> 'show_page_breadcrumbs',
			'label' 		=> 'Show breadcrumb navigation',
			'description' 	=> '',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options'		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes - all pages'
				),
				array( 
					'value' => '2', 
					'label' => 'Yes - child pages only'
				),
				array(
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' => 'show_page_date_time',
			'label' => 'Show page date / time',
			'description' => '',
			'default' => '1',
			'type' => 'select',
			'options' => array(
				array( 'value' => '1', 'label' => 'Date &amp; Time' ),
				array( 'value' => '2', 'label' => 'Date Only' ),
				array( 'value' => '3', 'label' => 'Time Only' ),
				array( 'value' => '0', 'label' => 'No' )
			)		
		),
		array(
			'key' 			=> 'show_page_author',
			'label' 		=> 'Show page author',
			'description' 	=> '',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' 			=> 'show_page_comments',
			'label'			=> 'Show comments list &amp; form',
			'description' 	=> '',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		)
	);
	$options['post'] = array(	
		array(
			'key' 			=> 'show_post_date_time',
			'label' 		=> 'Show post date / time',
			'description' 	=> '',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Date &amp; Time'
				),
				array( 
					'value' => '2',
					'label' => 'Date Only'
				),
				array( 
					'value' => '3', 
					'label' => 'Time Only'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' 			=> 'show_post_author',
			'label'			=> 'Show post author',
			'description' 	=> '',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' 			=> 'show_post_comments',
			'label' 		=> 'Show comments list &amp; form',
			'description' 	=> '',
			'default'		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' 			=> 'show_old_post_warning',
			'label'			=> 'Show old post warning',
			'description' 	=> 'If a post is over a year old, a warning is shown at the top of the post',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		)
		
	);
	$options['attachment'] = array(	
		array(
			'key' 			=> 'show_attachment_date_time',
			'label' 		=> 'Show date / time',
			'description' 	=> '',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Date &amp; Time'
				),
				array( 
					'value' => '2',
					'label' => 'Date Only'
				),
				array( 
					'value' => '3', 
					'label' => 'Time Only'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' 			=> 'show_attachment_author',
			'label'			=> 'Show author',
			'description' 	=> '',
			'default' 		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		array(
			'key' 			=> 'show_attachment_comments',
			'label' 		=> 'Show comments list &amp; form',
			'description' 	=> '',
			'default'		=> '1',
			'type' 			=> 'select',
			'options' 		=> array(
				array( 
					'value' => '1', 
					'label' => 'Yes'
				),
				array( 
					'value' => '0', 
					'label' => 'No'
				)
			)		
		),
		
	);
	
	if( $key ) {
		return $options[$key];
	}
	else {
		return $options;
	}
	
}


/**
 * Draw the options page
 */
function wpstrap_draw_options() {	
	$groups = wpstrap_options_groups();	
	foreach( $groups as $group ) {
		wpstrap_draw_options_group( $group );
	}	
}


/**
 * Draw an option group on the options page
 */
function wpstrap_draw_options_group( $group ) {
	?>
	<h3 class="title"><?php echo $group['title']; ?></h3>
	<table class="form-table">
		<tbody>
			<?php wpstrap_draw_options_fields( wpstrap_options( $group['key'] ) ); ?>
		</tbody>
	</table>	
	<hr />		
	<?php
}


/**
 * Draw an option within a group on the options page
 */
function wpstrap_draw_options_fields( $options ) {
	foreach( $options as $option ) {	
		?>
		<tr>
			<th scope="row">
				<label for="wpstrap_<?php echo $option['key']; ?>"><?php echo $option['label']; ?></label>
			</th>
			<td style="width:390px;">
				<?php
				switch( $option['type'] ) {
					case "select":
						wpstrap_draw_options_field_select( $option );
						break;
					case "textarea":
						wpstrap_draw_options_field_textarea( $option );
						break;
					case "image":
						wpstrap_draw_options_field_image( $option );
						break;
					default:
						wpstrap_draw_options_field_text( $option );
				}			
				?>
			</td>
			<td>
				<?php 
				if( isset( $option['description'] ) && strlen( $option['description'] ) ) {
					echo '<p class="description">' . $option['description'] . '</p>';
				}
				?>
			</td>
		</tr>
		<?php
	}
}


/**
 * Draw a textarea field for an option within a group on the options page
 */
function wpstrap_draw_options_field_textarea( $option ) {
	?>
	<textarea style="width:350px;height:120px;margin-right:0;" name="wpstrap_<?php echo $option['key']; ?>" id="wpstrap_<?php echo $option['key']; ?>"><?php echo wpstrap_opt( $option['key'] ) ?></textarea>
	<?php		
}


/**
 * Draw a input[type=text] field for an option within a group on the options page
 */
function wpstrap_draw_options_field_text( $option ) {
	?>
	<input style="width:350px;margin-right:0;" type="text" name="wpstrap_<?php echo $option['key']; ?>" id="wpstrap_<?php echo $option['key']; ?>" value="<?php echo wpstrap_opt( $option['key'] ) ?>">
	<?php		
}


/**
 * Draw a input[type=text] field for an option within a group on the options page
 */
function wpstrap_draw_options_field_image( $option ) {
	?>
	<input style="width:350px;margin-right:0;" type="text" name="wpstrap_<?php echo $option['key']; ?>" id="wpstrap_<?php echo $option['key']; ?>" value="<?php echo wpstrap_opt( $option['key'] ) ?>">
	<?php		
}


/**
 * Draw a select field for an option within a group on the options page
 */
function wpstrap_draw_options_field_select( $option ) {
	?>
	<select style="width:350px;margin-right:0;" id="wpstrap_<?php echo $option['key']; ?>" name="wpstrap_<?php echo $option['key']; ?>">
		<?php
		foreach( $option['options'] as $option_option ) {
			echo '<option' . selected( wpstrap_opt( $option['key'] ), $option_option['value'], false ) . ' value="' . $option_option['value'] . '">' . $option_option['label'] . '</option>';	
		}
		?>
	</select>	
	<?php		
}


/**
 * Save the options from the post array
 */
function wpstrap_options_update() {
	$groups = wpstrap_options_groups();
	foreach( $groups as $group ) {
		$options = wpstrap_options( $group['key'] );
		foreach( $options as $option ) {
			if( isset( $_POST['wpstrap_' . $option['key']] ) ) {
				wpstrap_update_option( $option['key'], $_POST['wpstrap_' . $option['key']] );
			}
		}
	}	
}

/**
 * Create options using their default values
 */
function wpstrap_options_create() {
	$groups = wpstrap_options_groups();
	foreach( $groups as $group ) {
		$options = wpstrap_options( $group['key'] );
		foreach( $options as $option ) {
			wpstrap_add_option( $option['key'], $option['default'] );
		}
	}	
}
wpstrap_options_create();

/**
 * Wrapper functions for accessing options 
 */
function wpstrap_add_option( $key, $value ) {
	return add_option( 'wpstrap-' . $key, $value );
}
function wpstrap_update_option( $key, $value ) {
	return update_option( 'wpstrap-' . $key, $value );
}
function wpstrap_opt( $key, $value = false ) {
	return get_option( 'wpstrap-' . $key, $value );
}


/**
 * Add the theme options page to the admin menu
 */
function wpstrap_options_page_menu() {
	add_theme_page( 'WP Strap Options', 'WP Strap Options', 'edit_theme_options', 'manage_options', 'wpstrap_options_page' );
}
add_action( 'admin_menu', 'wpstrap_options_page_menu' );


/**
 * Draw the theme options page
 */
function wpstrap_options_page() {
	if( isset( $_POST['do_submit'] ) && $_POST['do_submit'] == "1" ) {
		wpstrap_options_update();
	}
	?>
	<div class="wrap">
		<div id="wpstrap_options">
			<h2>WP Strap Options</h2>
			<p>Welcome to the WP Strap options. From here you can change options that control how your blog / website looks. If you have any questions, please <a href="#" title="Contact Us">contact us</a>.</p>
			<form action="" method="post">
				<input type="hidden" name="do_submit" value="1">
				<hr />
				<?php wpstrap_draw_options(); ?>
				<p class="submit"><input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes"></p>
			</form>
		</div>
	</div>
	<?php
}
?>