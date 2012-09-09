<?php
/** 
 * Add "Styles" dropdown menu to TinyMCE editor
 */   
add_filter( 'mce_buttons_2', 'wpstrap_add_tinymce_styles_menu' );  
  
function wpstrap_add_tinymce_styles_menu( $buttons ) {  
    array_unshift( $buttons, 'styleselect' );  
    return $buttons;  
}  
  
/** 
 * Add styles/classes to the TinyMCE "Styles" dropdown menu
 */   
add_filter( 'tiny_mce_before_init', 'wpstrap_add_tinymce_styles' );  
  
function wpstrap_add_tinymce_styles( $settings ) {  
  	
  	// Define styles
    $style_formats = array(  
        array(  
            'title' 	=> 'Image Thumbnail',  
            'selector' 	=> 'img',  
            'classes' 	=> 'thumbnail',
            'wrapper' 	=> false
        ), 
        array(  
            'title' 	=> 'Lead Paragraph',  
            'block' 	=> 'p',  
            'classes' 	=> 'lead',
            'wrapper' 	=> false
        ), 
        array(  
            'title' 	=> 'Badage (Default)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'badge'
        ),  
        array(  
            'title' 	=> 'Badage (Success)',  
            'inline' 	=> 'badge',  
            'classes' 	=> 'badge badge-success'
        ),  
        array(  
            'title' 	=> 'Badage (Warning)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'badge badge-warning'
        ),  
        array(  
            'title' 	=> 'Badage (Important)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'badge badge-important'
        ),  
        array(  
            'title' 	=> 'Badage (Info)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'badge badge-info'
        ),  
        array(  
            'title' 	=> 'Badage (Inverse)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'badge badge-inverse'
        ),    
        array(  
            'title' 	=> 'Label (Default)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'label'
        ),  
        array(  
            'title' 	=> 'Label (Success)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'label label-success'
        ),  
        array(  
            'title' 	=> 'Label (Warning)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'label label-warning'
        ),  
        array(  
            'title' 	=> 'Label (Important)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'label label-important'
        ),  
        array(  
            'title' 	=> 'Label (Info)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'label label-info'
        ),  
        array(  
            'title' 	=> 'Label (Inverse)',  
            'inline' 	=> 'span',  
            'classes' 	=> 'label label-inverse'
        ),  
        array(  
            'title' 	=> 'Button (Default, Default)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn'  
        ),  
        array(  
            'title' 	=> 'Button (Default, Mini)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-mini'
        ),  
        array(  
            'title' 	=> 'Button (Default, Small)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-small'
        ),  
        array(  
            'title' 	=> 'Button (Default, Large)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-large'
        ),        
        array(  
            'title' 	=> 'Button (Primary, Default)',  
            'selector' 	=> 'a',  
            'classes'	 => 'btn btn-primary'
        ), 
        array(  
            'title' 	=> 'Button (Primary, Mini)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-primary btn-mini'
        ), 
        array(  
            'title' 	=> 'Button (Primary, Small)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-primary btn-small'
        ), 
        array(  
            'title' 	=> 'Button (Primary, Large)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-primary btn-large'
        ), 
        array(  
            'title' 	=> 'Button (Info, Default)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-info'
        ),  
        array(  
            'title' 	=> 'Button (Info, Mini)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-info btn-mini'
        ),  
        array(  
            'title' 	=> 'Button (Info, Small)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-info btn-small'
        ),  
        array(  
            'title' 	=> 'Button (Info, Large)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-info btn-large'
        ),  
        array(  
            'title' 	=> 'Button (Success, Default)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-success'
        ),  
        array(  
            'title' 	=> 'Button (Success, Mini)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-success btn-mini'
        ),  
        array(  
            'title' => 'Button (Success, Small)',  
            'selector' => 'a',  
            'classes' => 'btn btn-success btn-small'
        ),  
        array(  
            'title' 	=> 'Button (Success, Large)',  
            'selector'	=> 'a',  
            'classes' 	=> 'btn btn-success btn-large'
        ),  
        array(  
            'title' 	=> 'Button (Warning, Default)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-warning'
        ),  
        array(  
            'title' 	=> 'Button (Warning, Mini)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-warning btn-mini'
        ),  
        array(  
            'title' 	=> 'Button (Warning, Small)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-warning btn-small'
        ),  
        array(  
            'title' 	=> 'Button (Warning, Large)',  
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-warning btn-large'
        ),  
        array(  
            'title' 	=> 'Button (Danger, Default)',   
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-danger'
        ),  
        array(  
            'title' 	=> 'Button (Danger, Mini)',   
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-danger btn-mini'
        ),  
        array(  
            'title' 	=> 'Button (Danger, Small)',   
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-danger btn-small'
        ),  
        array(  
            'title' 	=> 'Button (Danger, Large)',   
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-danger btn-large'
        ),  
        array(  
            'title' 	=> 'Button (Inverse, Default)',    
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-inverse'
        ),
        array(  
            'title' 	=> 'Button (Inverse, Mini)',    
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-inverse btn-mini'
        ),
        array(  
            'title' 	=> 'Button (Inverse, Small)',    
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-inverse btn-small'
        ),
        array(  
            'title' 	=> 'Button (Inverse, Large)',    
            'selector' 	=> 'a',  
            'classes' 	=> 'btn btn-inverse btn-large'
        ),
        array(  
            'title' 	=> 'Well (Default)',  
            'block' 	=> 'div',  
            'classes' 	=> 'well',
            'wrapper' 	=> false
        ), 
        array(  
            'title' 	=> 'Well (Small)',  
            'block' 	=> 'div',  
            'classes' 	=> 'well well-small',
            'wrapper' 	=> false
        ), 
        array(  
            'title' 	=> 'Well (Large)',  
            'block' 	=> 'div',  
            'classes'	=> 'well well-large',
            'wrapper' 	=> false
        ),    
        array(  
            'title' 	=> 'Alert (Default)',  
            'block' 	=> 'div',  
            'classes' 	=> 'alert',
            'wrapper' 	=> false
        ), 
        array(  
            'title' 	=> 'Alert (Error)',  
            'block' 	=> 'div',  
            'classes' 	=> 'alert alert-error',
            'wrapper' 	=> false
        ), 
        array(  
            'title' 	=> 'Alert (Success)',  
            'block' 	=> 'div',  
            'classes' 	=> 'alert alert-success',
            'wrapper' 	=> false
        ), 
        array(  
            'title' 	=> 'Alert (Info)',  
            'block' 	=> 'div',  
            'classes' 	=> 'alert alert-info',
            'wrapper' 	=> false
        )
    );  
    
    // Encode the styles in JSON
    $settings['style_formats'] = json_encode( $style_formats );  
  
    // Retun the styles
    return $settings;  
  
} 
?>