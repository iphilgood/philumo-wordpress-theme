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
  <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light:300' rel='stylesheet' type='text/css' />
  

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>
  
  <script language="javascript" src="<?php bloginfo('template_directory'); ?>/includes/javascripts/jquery-1.4.2.min.js" type="text/javascript"></script>
  <script language="javascript" src="<?php bloginfo('template_directory'); ?>/includes/javascripts/jquery.tweet.js" type="text/javascript"></script>
  <script language="javascript" src="<?php bloginfo('template_directory'); ?>/includes/javascripts/philschilter.js" type="text/javascript"></script>

</head>

<body <?php body_class(); ?>>

  <div id="page-wrapper">
    
    <div id="header">
      <div id="name-wrapper">
        <div id="name">
          <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
        </div>
      </div>
        
      <div id="main-navigation">
        <?php wp_nav_menu(); ?>
      </div>
    </div>
    
    

