<!-- Footer Element Starts Here -->
<footer id="copyrights">

 <p><small>&copy; 2014 <a href="http://www.dzyngiri.com/" target="_blank">Original HTML by Dzyngiri</a></small></p>
 	<?php 

		// first let's get our nav menu using the regular wp_nav_menu() function with special parameters
		$cleanermenu = wp_nav_menu( array( 
			'theme_location' => 'footer-menu', // we've registered a theme location in functions.php
		 	'container' => false, // this is usually a div outside the menu ul, we don't need it
			'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>', // replacing the ul with nav
			'echo' => false, // don't display it just yet, instead we're storing it in the variable $cleanermenu
		) );
		 
		// Find the closing bracket of each li and the opening of the link, then all instances of "li"
		$find = array('><a','li');
		// Replace the former with nothing and the latter with "a"
		$replace = array('','a');
		echo str_replace( $find, $replace, $cleanermenu );
	?>
  	<address>
  		<a href="http://harishkotra.me/" target="_blank">Built with <3 by Harish Kotra</a>
 	</address>
</footer>

<!-- Footer Element Ends Here -->
</div>
<!-- Div Wrapper Element ends Here -->
<?php wp_footer() ?>
</body>
</html>