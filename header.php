<?php
/**
 * @package WordPress
 * @subpackage Genesis
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/ackernaut/style/js/jquery.localscroll-min.js" type="text/javascript"></script>
<script src="/wp-content/themes/ackernaut/style/js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="/wp-content/themes/ackernaut/style/js/global.js" type="text/javascript"></script>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<!-- wordpress head -->
<?php wp_head(); ?>
<!-- /wordpress head -->
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<div id="wrap">
<header class="global">
  <nav>
    <ul>
      <?php /*?><?php wp_list_pages('&title_li='); ?><?php */?>
      <li id="home"><a href="/" title="Ackernaut">Ackernaut</a></li>
      <li><a href="/blog/" title="Blog">Blog</a></li>
      <li><a href="/work/" title="Work">Work</a></li>
      <li><a href="/about/" title="About">About</a></li>
    </ul>
    <?php get_search_form(); ?>
  </nav>
</header>
