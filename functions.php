<?php
function load_js() {
	if ( !is_admin() ){
		wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), NULL, true );
    wp_enqueue_script('fullpage1', get_option('site_url').'/wp-content/themes/glow/js/fullPage.min.js', array('jquery'), 'NULL', true);
    wp_enqueue_script('fullpage2', get_option('site_url').'/wp-content/themes/glow/js/scrolloverflow.min.js', array('jquery'), 'NULL', true);
    wp_enqueue_script('fullpage3', get_option('site_url').'/wp-content/themes/glow/js/easings.min.js', array('jquery'), 'NULL', true);
    wp_enqueue_script('wow', get_option('site_url').'/wp-content/themes/glow/js/wow.min.js', array(), 'NULL', true);
    wp_enqueue_script('siteScript', get_option('site_url').'/wp-content/themes/glow/js/script.js', array('jquery'), 'NULL', true);
	}
}
add_action( 'init', 'load_js' );
?>