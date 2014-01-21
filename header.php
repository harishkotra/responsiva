<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1" />
<title><?php
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
bloginfo('name'); ?></title>
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
  <nav class="navigation">
		<a href="http://www.dzyngiri.com/">Home</a>
        <a href="http://www.dzyngiri.com/?cat=5">Tutorials</a>
        <a href="http://www.dzyngiri.com/?cat=10">Inspiration</a>
        <a href="http://www.dzyngiri.com/?cat=11">Freebies</a>
      <a href="http://feeds.feedburner.com/dzyngiri" target="_blank">RSS Feed of all articles</a>
      <a href="http://twitter.com/dzyngiri" target="_blank">JOIN US on TWITTER</a>
      <a href="http://www.facebook.com/dzyngiri" target="_blank">JOIN US on FACEBOOK</a>
      <a href="http://www.dzyngiri.com/?page_id=5">Contact Us</a>
      </nav>
  
</header>
<!-- Header Element Ends Here -->