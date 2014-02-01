<?php get_header(); ?>
	<!-- Div wrapper2 starts here -->
	<div id="Wrapper2">
		<!-- Sidebar Element Starts Here -->
		<?php get_sidebar() ?>
			
		<!-- Article Element Starts Here -->
		<article id="contents">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<header><h1><a href=""><?php the_title() ;?></a></h1></header>

					<?php the_post_thumbnail(); ?>

					<?php the_excerpt(); ?>

				<?php endwhile; else: ?>

					<p>Sorry, no posts to list</p>

				<?php endif; ?>
		</article>
		<!-- Article Element Ends Here -->
	</div>
	<!-- Div wrapper2 ends here -->
<?php get_footer(); ?>