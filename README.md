#WP Strap - v0.2
##Overview
WP Strap is an open-source [WordPress](http://www.wordpress.org) theme using the [Bootstrap](http://www.getbootstrap.com) framework from Twitter. The aim of this theme is to use as much of the default Bootstrap styling as possible, with only minor CSS additions to support WordPress features. It is still a work in progress, however it will continually be expanded with new features and support for the latest versions of WordPress and Bootstrap as they’re released. If you spot something that isn't included that you think should be, please check [the issues](https://github.com/gbuckingham89/wpstrap/issues?state=open) and submit one if needed.

A demo of the theme is available at <http://wpstrap.com/>.

WP Strap is developed by George Buckingham ([@gbuckingham89](http://www.twitter.com/gbuckingham89)).

##Usage and License
WP Strap is available freely under the GPL license for you to use as you wish. It's always nice hear how it is being used, so please feel free to let me know what you are using it for.

It also includes code from Bootstrap and jQuery projects which use the Apache License and MIT License respectively.

##Features

###LESS CSS
The Bootstrap LESS files are included and remain un-edited for ease of upgrade, however they are not compiled directly. An additional LESS file is included called /less/wpstrap.less, which includes all the Bootstrap LESS files and some additional styling, mainly to support WordPress features such as comments and widgets. This additional LESS file can then be compiled into /style.css. I use [CodeKit](http://incident57.com/codekit/) to locally compile LESS files. The compiled /style.css is included in the theme.

###Responsive Design
Bootstrap supports responsive design through the include of additional LESS files. WP Strap does include this additional LESS files, however it hasn't been fully tested on mobile devices yet, so some areas that use custom styling, such as the WordPress comments region, may not be fully optimised for mobile devices. If you spot any problems, please [open an issue](https://github.com/gbuckingham89/wpstrap/issues?state=open).

###WP Strap Options Page
An options page is provided in the WordPress admin area under the appearance menu where several customisations can be made to the theme. These option choices are stored using the WordPress options API.

###Navbar
The standard Bootstrap Navbar is displayed at the top of every page. From the WP Strap Options, the background colour of the navbar can be controlled - with the Bootstrap white and black (inverse) options available.

###Navbar Navigation Menu
WP Strap makes use of the WordPress menus feature and the Bootstrap navbar links to display a navigation menu in the navbar. To achieve this, WP Strap uses a custom WordPress nav walker object to construct the required HTML structure. The navigation menu supports unlimited levels of navigation using the standard Bootstrap dropdown menus. If no menu is defined within the WordPress admin area, no menu will be shown.

###Navbar Search Box
By default, a search box is shown on the right of the navbar. Through the WP Strap options page in the WordPress admin area, this search box can also be aligned to left or hidden altogether. It is contained within the responsive area, so it will get hidden on devices with a smaller screen resolution.

###Widget Ready
WP Strap is widget ready - allowing you to add widgets to the sidebar through the WordPress admin area. Additional CSS rules have been added to ensure the default WordPress widgets display nicely.

#Changelog
##vx.x - xx/xx/xxxx
###All Changes
- Increased spacing above comments box
- Reordered <head> elements to output charset before title tag
- Added theme support for feed links
- Added editor-style.css to style content in the editor
- Added "Styles" dropdown to the editor to support:
-- Lead paragraph (p.lead)
-- Alerts (div.alert)
-- Wells (div.well)
-- Labels (span.label)
-- Badages (span.badage)
- Introduced support for multi-page posts with wp_link_posts()
- Fixed PHP warnings in comments.php
- Removed link to stylesheet from <head> and replaced with wp_register_style() and wp_enqueue_style()
- Stopped styling all images in the_content() with .thumbnail by default
- Added /modified styling for core WordPress CSS classes (.aligncenter, .alignleft, .alignright, .wp-caption, .wp-caption-text, .gallery-caption, .sticky, .bypostauthor)
- Renamed page-full-width.php to full-width-page.php to comply with WordPress theme review recommendations

##v0.2 - 05/09/2012
###All Changes
- Added support for post featured images
- Styled password protected post password form and hid comments from password protected posts until a password has been provided
- Now Bootstrap dropdown sub-menus open one at a time, support has been added for unlimited depth in the navigation menu
- Upgraded Bootstrap assets to v2.1.1
- Introduced Google Analytics tracking code
- Added ability to change sidebar width
- Added full width page template
- Fixed bug with menu which prevented dropdown from showing

##v0.1 - 28/08/2012
###Highlights
- First release
- Styling for most basic WordPress features
- Introduced Bootstrap V0.1 (LESS, JS and images)
- WordPress admin area options page implemented

###All Changes
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