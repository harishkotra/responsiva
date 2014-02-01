<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1" />
<title>
  <?php
      // is the current page a tag archive page?
      if (function_exists('is_tag') && is_tag()) {
        // if so, display this custom title
        echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
      // or, is the page an archive page?
      } elseif (is_archive()) {
        // if so, display this custom title
        wp_title(''); echo ' Archive - '; 
      // or, is the page a search page?
      } elseif (is_search()) {
        // if so, display this custom title
        echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 

      // or, is the page a single post or a literal page?
      } elseif (!(is_404()) && (is_single()) || (is_page())) { 
        // if so, display this custom title
        wp_title(''); echo ' - ';
      // or, is the page an error page?
      } elseif (is_404()) {
        // yep, you guessed it
        echo 'Not Found - '; 
      }
      // finally, display the blog name for all page types
      bloginfo('name'); ?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<?php wp_head(); ?>

</head>
<body>

<div class="resize"></div>
  
  <!-- Div Wrapper Element Starts Here -->
  <div id="Wrapper">
    <!-- Header Element Starts Here -->
    <header id="header">
	    <!-- Hgroup Element Starts Here -->
      <hgroup id="title">
        <div id="logo"></div>
        <!--<h1>Creating HTML5 <span>Responsive Web Template Using Media Queries</span></h1>-->
        <h2><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h2>
      </hgroup>
      <!-- Hgroup Element Ends Here -->
  
      <!-- Nav Element Starts Here -->

      <?php 

      // first let's get our nav menu using the regular wp_nav_menu() function with special parameters
      $cleanermenu = wp_nav_menu( array( 
        'theme_location' => 'header-menu', // we've registered a theme location in functions.php
        'container' => false, // this is usually a div outside the menu ul, we don't need it
        'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>', // replacing the ul with nav
        'echo' => false, // don't display it just yet, instead we're storing it in the variable $cleanermenu
        'menu_class' => 'navigation'
      ) );
       
      // Find the closing bracket of each li and the opening of the link, then all instances of "li"
      $find = array('><a','li');
      // Replace the former with nothing and the latter with "a"
      $replace = array('','a');
      echo str_replace( $find, $replace, $cleanermenu );
      
      ?>
    </header>
    <!-- Header Element Ends Here -->