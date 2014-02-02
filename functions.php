<?php

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');

//function to remove the version from displaying in wordpress.
function responsiva_remove_version() {
  return '';
}
add_filter('the_generator', 'responsiva_remove_version');


//Two menu locations definition

function register_responsiva_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_responsiva_menus' );

register_sidebar(array(
  'name' => __( 'Main Sidebar' ),
  'id' => 'main-sidebar',
  'description' => __( 'Widgets in this area will be shown on the main sidebar.' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>'
));

?>
