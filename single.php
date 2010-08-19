<?php get_header(); ?>
<div id="content-wrapper">
  <div id="content">
    
    <div id="post-navigation">
      <span class="awesome left"><?php previous_post_link('%link'); ?></span>
      <span class="awesome right"><?php next_post_link('%link'); ?></span>
    </div>

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        
        <div class="post-meta">
          
          <div class="category-image">
            <?php
              // Get the ID of a given category
              $category_id = get_cat_ID( 'Uncategorized' );

              // Get the URL of this category
              $category_link = get_category_link( $category_id );
            ?>

            <!-- Print a link to this category -->
            
            
            <?php if (is_category('Category A')) { ?>
            <p>This is the text to describe category A</p>
            <?php } elseif (is_category('Category B')) { ?>
            <p>This is the text to describe category B</p>
            <?php } else { ?>
              <div class="uncategorized">
                <a href="<?php echo $category_link; ?>" title="Uncategorized"></a>
              </div>
            <?php } ?>
          </div>
          
          
          <!-- Publish Date -->
          <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?><br /><br />
            
          <!-- Tweet Button -->
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical">
              Tweet
            </a>
            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br /><br />

          <!-- Facebook Share Button -->
          <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Teilen</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
          
        
      </div>
        <div class="entry-wrapper">
          <div id="title-wrapper">
            <h2>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="comment-cloud">
              <!-- Comments  -->
              <?php comments_popup_link('0', '1', '%'); ?>
            </div>
          </div>
          <div class="entry">
            <?php the_content(); ?>
          </div>
          <?php comments_template(); ?>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>
</div>

<?php get_footer(); ?>