<?php get_header(); ?>
<div id="content-wrapper">
  <div id="content">
    
    <h2 class="spacer">Category: <?php single_cat_title(); ?></h2>
    
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
            
            
            <?php if (in_category('Music')) { ?>
              <div class="music">
                <a href="<?php echo get_category_link(4); ?>" title="Music"></a>
              </div>
            <?php } elseif (in_category('travelling')) { ?>
              <div class="travelling">
                <a href="<?php echo get_category_link(5); ?>" title="Travelling"></a>
              </div>
            <?php } elseif (in_category('art')) { ?>
              <div class="art">
                <a href="<?php echo get_category_link(6); ?>" title="Art"></a>
              </div>
            <?php } else { ?>
              <div class="uncategorized">
                <a href="<?php echo get_category_link(1); ?>" title="Uncategorized"></a>
              </div>
            <?php } ?>
          </div>
          
          
          <!-- Publish Date -->
          <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?><br /><br />
        
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