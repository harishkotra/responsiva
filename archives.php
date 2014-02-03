<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<!-- Div wrapper2 starts here -->
	<div id="Wrapper2">
		<!-- Sidebar Element Starts Here -->
		<?php get_sidebar() ?>
			
		<!-- Article Element Starts Here -->
		<article id="contents">
		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

		</article>
		<!-- Article Element Ends Here -->
	</div>
	<!-- Div wrapper2 ends here -->
<?php get_footer(); ?>