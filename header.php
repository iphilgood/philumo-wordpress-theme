<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
  
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  
  <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" /> 
  <?php } ?>

  <title>
    <?php
      if (function_exists('is_tag') && is_tag()) {
        single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
      elseif (is_archive()) {
        wp_title(''); echo ' Archive - '; }
      elseif (is_search()) {
        echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
      elseif (!(is_404()) && (is_single()) || (is_page())) {
        wp_title(''); echo ' - '; }
      elseif (is_404()) {
        echo 'Not Found - '; }
      if (is_home()) {
        bloginfo('name'); echo ' - '; bloginfo('description'); }
      else {
        bloginfo('name'); }
      if ($paged>1) {
    echo ' - page '. $paged; }
    ?>
  </title>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link href=' http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans+Std+Light' rel='stylesheet' type='text/css'>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id="page-wrapper">

    <div id="header-wrapper">
      <div id="header">
        <!--
          <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
          <div class="description"><?php bloginfo('description'); ?></div>
        -->
        <div id="logo">
          <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="I am Phil Schilter" title="I am Phil Schilter">
        </div>
        <div id="main-navigation">
          <?php wp_nav_menu(); ?>
        </div>
      </div>
            
    </div>
    
    <div id="claim">
      <h1>
        Hey there, I am <span class="blue">Phil Schilter</span> from Switzerland and 18 years old.<br />
        This here is my first Wordpress Theme. I hope I have done a good job.<br /> 
        <a href="http://www.twitter.com/phil_schilter" target="_blank">Follow me</a> on Twitter or read the latest news on my personal <a href="/blog">blog</a>.<br />
      </h1>
    </div>

