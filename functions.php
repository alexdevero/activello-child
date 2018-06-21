<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
  function chld_thm_cfg_parent_css() {
    wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'activello-bootstrap','activello-icons' ) );
  }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

add_filter( 'fb_og_update_cache_url', 'my_fb_og_update_cache_url' );
function my_fb_og_update_cache_url( $url ) {
  $url .= '&access_token=1902003473461468|6a0761759ddbb14cbaf120bae05df962';
  return $url;
}
