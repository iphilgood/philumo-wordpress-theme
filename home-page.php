<?php
/**
 * Template Name: Home
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */

get_header(); ?>

<div id="claim">
  <p>
    Hey there, I am <a href="/">Phil Good</a> from Switzerland and 18 years old.<br />
    This here is my new website. I hope I have done a good job.<br />
    <a href="http://www.twitter.com/phil_schilter" target="_blank">Follow me on Twitter</a> or read the latest news on my personal <a href="/blog/">blog</a>.
  </p>
</div>

<div id="content-wrapper">
  <?php
    query_posts('pagename=blog'); 
  ?>
  
  <div id="blog-entries">
    <?php while (have_posts()) : the_post(); ?>
     <div class="blog-entry">
       <p>
         <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> about <?php the_time('d'); ?> days ago.
       </p>
     </div>
    <?php endwhile; ?>
  </div>
  
  <div id="latest-tweets">
    
  </div>
  
</div><!-- #content-wrapper -->

<?php get_footer(); ?>
