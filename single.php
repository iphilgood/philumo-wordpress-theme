<?php get_header(); ?>
<div id="content-wrapper">
  <div id="content">

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        
        <div class="category">
          
        </div>

        <div class="entry-wrapper">
          <h2><?php the_title(); ?></h2>
          <div class="entry">
            <?php the_content(); ?>
          </div>
          <?php comments_template(); ?>
        </div>

        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>


        </div> <!-- #entry -->

      </div> <!--  -->

    <?php endwhile; endif; ?>
  </div>
  
  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>