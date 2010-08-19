<?php get_header(); ?>
<div id="content-wrapper">
  <div id="content">
    
    <h2 class="spacer">Search results for: <?php the_search_query(); ?></h2>
    
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

        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
      </div>
    <?php endwhile; else: ?>

		  <h2>No posts found.</h2>
    
    <?php endif; ?>
  </div>
</div>
</div>

<?php get_footer(); ?>
