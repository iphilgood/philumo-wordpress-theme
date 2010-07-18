<?php get_header(); ?>

<div id="content-wrapper">
  <div id="content">
    <h1>frisch geschrieben ...</h1>
    <div id="three-entries-wrapper">
      <?php if (have_posts()) : ?>
      
        <?php while (have_posts()) : the_post(); ?>

          <div class="post">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small>
              <?php the_time('d.m.Y') ?> &ndash; <?php comments_popup_link('Kein Kommentar &#187;', '1 Kommentar &#187;', '% Kommentare &#187;'); ?>
            </small>

            <div class="entry">
              <?php the_content('Read the rest of this entry &raquo;'); ?>
            </div>
          </div>

        <?php endwhile; ?>

      <?php else : ?>

        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php get_search_form(); ?>

    <?php endif; ?>
    </div>
  </div>
  
  <?php get_sidebar(); ?>
  
</div>

<?php get_footer(); ?>
