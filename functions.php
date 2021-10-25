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

// for plan text echo

function shortcodify($text) {

	$text =  "<h1>Hello World</h1>";

	return $text;
  }
   
  add_filter('text', 'shortcodify');


// for search form

  function search_spendebt($form){
	$homedir = home_url("/");
		$new_from = <<<FORM
	<form action="{$homedir}" method="GET" role= "search" class="search-form">
	<div class="form-group">
	<input type="search" placeholder="Search the post" name= "s">
	<button type="submit"><i class="icon-search"></i></button>
	</div>
	</form>
	FORM;
	return $new_from;
	}
	add_filter('get_search_form', 'search_spendebt');

// register sidebar

  function icon_widgets() {
	register_sidebar( array(
        'name'		    => __('icon-sidebar'),
        'id'            => 'icon-sidebar',
        'description'   => __('icon sidebar','spendebt'),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>",
		));
    
}

add_action( 'widgets_init', 'icon_widgets' );

?>

