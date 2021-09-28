<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function spendebt_setup(){
load_theme_textdomain("spendebt");
add_theme_support("post-thumbnails");
add_theme_support("title-tag");

register_nav_menus(
    array(
   
   'top_menu' => esc_html(__('Primary Menu', 'spendebt')), 
   'footer_menu'=>  esc_html(__('Footer Menu', 'spendebt')), 
),
); 
}
add_action("after_setup_theme","spendebt_setup");


function spendebt_assests(){
wp_enqueue_style("main-css",get_stylesheet_uri());
wp_enqueue_style("external-css",get_theme_file_uri("//use.typekit.net/sos3edy.css"));
wp_enqueue_style("plugin-css",get_theme_file_uri("/assets/css/plugins.css"));
wp_enqueue_style("icon-css",get_theme_file_uri("/assets/css/icon_fonts.css"));

wp_enqueue_script("min-js",get_theme_file_uri("/assets/js/jquery.min.js"),array("jquery"),time(),true);
wp_enqueue_script("plugin-js",get_theme_file_uri("/assets/js/plugins.js"),array("jquery"),time(),true);
wp_enqueue_script("sctipt-js",get_theme_file_uri("/assets/js/scripts.js"),array("jquery"),time(),true);

}

add_action("wp_enqueue_scripts","spendebt_assests");

// add option page 

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Option',
		'menu_title'	=> 'Option',
		'menu_slug' 	=> 'Option',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position' 	=> 2
	));
		
}


?>