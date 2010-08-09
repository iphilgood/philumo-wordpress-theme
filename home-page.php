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
    Hey there, I am <a href="/">Phil Schilter</a> from Switzerland and 18 years old.<br />
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
    <div class="tweet">
      <p>
        <?php

        $username = "phil_schilter";

        $feed = "http://search.twitter.com/search.atom?q=from:" . $username;

        function parse_feed($feed) {
            $stepOne = explode("<content type=\"html\">", $feed);
            $stepTwo = explode("</content>", $stepOne[1]);
            $tweet = $stepTwo[0];
            $tweet = str_replace("&lt;", "<", $tweet);
            $tweet = str_replace("&gt;", ">", $tweet);
            $tweet = str_replace("&quot;", "\"", $tweet);
            $tweet = str_replace("&amp;apos;", "'", $tweet);
            return $tweet;
        }

        $twitterFeed = file_get_contents($feed);
        echo parse_feed($twitterFeed);
        ?>
      </p>
    </div>
  </div>
  
</div><!-- #content-wrapper -->

<?php get_footer(); ?>
