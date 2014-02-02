<aside id="sidebar-wrapper">

  <nav class="sidebar">

    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>

      <?php dynamic_sidebar( 'main-sidebar' ); ?>

    <?php else : ?>

        <nav class="sidebar">
         <h1>I am Social !</h1>
         <ul>
          <li><a href="http://www.facebook.com/harish.kotra" target="_blank">Facebook</a>
          <li><a href="http://twitter.com/HarishKotra" target="_blank">Twitter</a>
         </ul>
        </nav>
        
        <nav class="sidebar">
          
          <h1>Calendar</h1>
          <ul>
          <li id="calendar"><?php get_calendar(); ?></li>
          </ul>

          <?php wp_list_pages('title_li=<h1>Pages</h1>'); ?>
          
          <h1><?php _e('Categories'); ?></h1>
          <ul>
            <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
          </ul> 
        </nav>

    <?php endif; ?>

  </nav>

 </aside>
<!-- Another Sidebar Element Ends Here -->