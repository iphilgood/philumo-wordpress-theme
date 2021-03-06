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
      <h1>Latest Posts</h1>
      <?php query_posts('posts_per_page=3'); ?>
      <?php while (have_posts()) : the_post(); ?>
       <div class="blog-entry">
         <p>
           <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> about <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago.'; ?>
         </p>
         <div class="comment-cloud">
           <!-- Comments  -->
           <?php comments_popup_link('0', '1', '%'); ?>
         </div>
       </div>
      <?php endwhile; ?>
    </div>
  
    <div id="latest-tweets">
      <h1>Latest Tweets</h1>
    </div>
  
  </div>

</div><!-- Page Wrapper End  -->

<?php get_footer(); ?>
