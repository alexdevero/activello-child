<?php
  /* Load Ativello theme & Activello child theme stylesheets */
  function my_theme_enqueue_styles() {

    $parent_style = 'activello-style'; // This is 'activello-style' for the Activello theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
    );
  }

  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

  /*
  If you want the "Facebook Open Graph, Google+ and Twitter Card Tags" WordPress plugin to be able
  to clear/update the cache of your posts and pages, you'll need to create a facebook app and add
  it's ID and secret to the URL.
  1) Go to https://developers.facebook.com/apps/ and create a new app (or choose and existant one, any app will do)
  2) Copy the App ID and App Secret from your app dashboard
  3) Add this to your (child-)theme's functions.php file and replace MY_APP_ID and MY_APP_SECRET with your app details
  */
  add_filter( 'fb_og_update_cache_url', 'my_fb_og_update_cache_url' );
  function my_fb_og_update_cache_url( $url ) {
  	$url .= '&access_token=1902003473461468|6a0761759ddbb14cbaf120bae05df962';
  	return $url;
  }
?>
