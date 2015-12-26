<?php
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Side Nav' ));
}
add_action( 'init', 'register_my_menu' );

function my_scripts_method() {
	wp_enqueue_script(
		'random-script',
		get_stylesheet_directory_uri() . '/js/ui.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>