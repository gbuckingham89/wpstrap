#WP Strap - v0.5
##Overview
WP Strap is an open-source [WordPress](http://www.wordpress.org) theme using the [Bootstrap](http://www.getbootstrap.com) framework from Twitter. The aim of this theme is to use as much of the default Bootstrap styling as possible, with only minor CSS additions to provide styling for WordPress features. It is an on-going project and will continue to be expanded as well as updated to support the latest versions of Bootstrap and WordPress.

A full feature list and documentation is available at <http://wpstrap.com/>. A demo version of the theme in action is available at <http://demo.wpstrap.com/>.

WP Strap is developed by [George Buckingham](http://georgebuckingham.com) ([@gbuckingham89](http://www.twitter.com/gbuckingham89)).

If you spot any issues, or have any feature requests please feel free to submit them via the GitHub issue tracker.

##Usage and License
WP Strap is available under the GPL V3 license. It is completely optional, but if you like the theme I would appreciate it if you keep the credit link at the bottom. The theme also includes code from Bootstrap and jQuery projects which use the Apache License and MIT License respectively.

##Changelog
###v0.5 - xx-xx-xxxx
####All Changes
- Changed licence from GPL V2 to GPL V3
- Added clearer div to search form
- Removed jQuery and replace with bundled WordPress version
- Removed HTML5Shiv hotlink and included JS script within the theme, included by a wp_head hook
- Removed searchform.php and placed search form into function, called by get_search_form filter

###v0.4.1 - 14-09-2012
####All Changes
- Removed Google Analytics option to comply with WordPress theme directory

###v0.4 - 14-09-2012
####All Changes
- Added rules to WordPress CSS classes (.bypostauthor, .sticky) to ensure they're included in compiled style.css
- Added a $content_width definition as required by the WordPress theme directory
- Tidied up comments.php to meet requirements of WordPress theme directory
- Added call to wp_enqueue_script comment-reply JavaScript

###v0.3 - 13-09-2012
####All Changes
- Increased spacing above comments box
- Reordered <head> elements to output charset before title tag
- Added theme support for feed links
- Added editor-style.css to style content in the editor
- Added "Styles" dropdown to the editor to support:
-- Lead paragraph (p.lead)
-- Alerts (div.alert)
-- Wells (div.well)
-- Labels (span.label)
-- Badages (span.badge)
- Introduced support for multi-page posts with wp_link_posts()
- Fixed PHP warnings in comments.php
- Removed link to stylesheet from <head> and replaced with wp_register_style() and wp_enqueue_style()
- Stopped styling all images in the_content() with .thumbnail by default
- Added /modified styling for core WordPress CSS classes (.aligncenter, .alignleft, .alignright, .wp-caption, .wp-caption-text, .gallery-caption, .sticky, .bypostauthor)
- Renamed page-full-width.php to full-width-page.php to comply with WordPress theme review guidelines
- Changed options prefix from 'wpstrap_' to 'wpstrap-' to comply with WordPress theme review guidelines
- Updated theme options page to use selected() method for apply selected="selected"
- Tidied code to meet WordPress coding standards
- Removed front-page.php file (to show default list of blog posts on homepage). Added homepage.php page template for use with a static front page.
- Added fix to clear floats at the end of a post / page
- Added option to show / hide warning message about old posts
- Added single-attachment template and options on the options page for attachments
- Updated calls to wpstrap functions where a post type is required to use $post->post_type rather than be hard coded
- Updated README and style.css introduction

###v0.2 - 05-09-2012
####All Changes
- Added support for post featured images
- Styled password protected post password form and hid comments from password protected posts until a password has been provided
- Now Bootstrap dropdown sub-menus open one at a time, support has been added for unlimited depth in the navigation menu
- Upgraded Bootstrap assets to v2.1.1
- Introduced Google Analytics tracking code
- Added ability to change sidebar width
- Added full width page template
- Fixed bug with menu which prevented dropdown from showing

###v0.1 - 28-08-2012
####Highlights
- First release
- Styling for most basic WordPress features
- Introduced Bootstrap V0.1 (LESS, JS and images)
- WordPress admin area options page implemented

####All Changes
- Introduced jQuery version 1.7.2.
- Introduced Bootstrap V0.1 (LESS, JS and images)
- Created /less/wpstrap.less to provide custom styling and import Bootstrap LESS files
- Compiled LESS files to /style.css
- Provided styling for the following WordPress features
 - 404 Error page (404.php)
 - Date based post archives (archive.php)
 - Author post archives (author.php)
 - Category archives (category.php)
 - Post and page comments list (comments.php)
 - Post and page comment form (comments.php)
 - Header and footer (header.php and footer.php)
 - Homepage using Bootstrap hero unit component (front-page.php)
 - Post archive (index.php)
 - Displaying of posts whilst in the loop (loop.php)
 - Standard 2-col page layout (page.php)
 - Search results page (search.php)
 - Search form (searchform.php)
 - Sidebar (sidebar.php)
 - Single post view (single.php)
 - Tag post archive (tag.php)
- Implemented WordPress widgets in the sidebar
- Implemented WordPress menu in the navbar
- WordPress admin area options page (Appearance - WP Strap Options) introduced with options for
 - Showing / hiding and positioning of search box in the navbar
 - Changing the background colour of the navbar
 - Showing / hiding of breadcrumb navigation on pages
 - Showing / hiding of page date & time
 - Showing / hiding of page author
 - Showing / hiding of page comments list & comment form
 - Showing / hiding of post date & time
 - Showing / hiding of post author
 - Showing / hiding of post comments list & comment form
- Added screenshot.png
- Added readme and license files