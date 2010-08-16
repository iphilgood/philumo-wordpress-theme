<?php get_header(); ?>
<div id="content-wrapper">
  <div id="content">
    
    <div id="post-navigation">
      <span class="awesome left"><?php previous_post('%', '', 'yes', 'yes'); ?></span>
      <span class="awesome right"><?php next_post('%', '', 'yes', 'yes'); ?></span>
    </div>

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        
        <div class="post-meta">
          
          <!-- Publish Date -->
          <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?><br /><br />
          
          <!-- Comments  -->
            <?php comments_popup_link('No Notes', '1 Note', '% Notes'); ?><br /><br />
            
          <!-- Tweet Button -->
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical">
              Tweet
            </a>
            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br /><br />

          <!-- Facebook Share Button -->
          <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Teilen</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
          
        </div>

        <div class="entry-wrapper">
          <h1><?php the_title(); ?></h1>
          <div class="entry">
            <?php the_content(); ?>
          </div>
          <?php comments_template(); ?>
        </div>

        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

    <?php endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>