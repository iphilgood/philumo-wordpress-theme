<div id="footer-wrapper">
  <div id="footer-spacer">

  </div>
  <div id="footer">
    <div id="primary" class="widget-area" role="complementary">
      <ul class="xoxo">

      <?php
      	/* When we call the dynamic_sidebar() function, it'll spit out
      	 * the widgets for that widget area. If it instead returns false,
      	 * then the sidebar simply doesn't exist, so we'll hard-code in
      	 * some default sidebar stuff just in case.
      	 */
      	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

    			<li id="search" class="widget-container widget_search">
    			  <h4 class="widget-title">Search</h4>
    			  <span class="description">If you search something get it here.</span>
    				<?php get_search_form(); ?>
    			</li>


    		<?php endif; // end primary widget area ?>
    		</ul>
    	</div><!-- #primary .widget-area -->
    	
    	<div id="secondary">
    	 
    	  <?php if ( !function_exists('dynamic_sidebar')
          
          || !dynamic_sidebar() ) : ?>
        
        <?php endif; ?>
    	 
    	</div>
    	
    	<div id="tertiary">
    	  <h4>Where To Find Me</h4>
    	  <span class="description">Yes! I'm social.</span>
    	  
    	  <div id="subscribe-rss">
    	    <a href="http://www.philschilter.ch/?feed=rss2" target="_blank">
    	     Subscribe to my blog
    	    </a>
    	  </div>
    	  
    	  <div id="twitter">
    	    <a href="http://www.twitter.com/i_philgood" target="_blank">
    	      Follow me on Twitter.
    	    </a>
    	  </div>
    	  
    	  <div id="facebook">
    	    <a href="http://www.facebook.com/phil.schilter" target="_blank">
    	      My Facebook profile.
    	    </a>
    	  </div>
    	  
    	  <div id="lastfm">
    	    <a href="http://www.lastfm.com/user/philu7" target="_blank">
    	      Because music is awesome.
    	    </a>
    	  </div>
    	  
    	  <div id="github">
    	    <a href="http://www.github.com/iphilgood" target="_blank">
    	      Fork me on github.
    	    </a>
    	  </div>
    	  
    	</div>
    	
    </div>
  </div>
  
  <div id="footer-bottom-wrapper">
    <div id="footer-bottom">
      <p>
        © <?php the_date('Y'); ?> <a href="#top" title="Scroll back to top">Phil Good</a>. All Rights Reserved.
      </p>
    </div>
  </div>
  
  

<!-- Don't forget analytics -->

</body>

</html>