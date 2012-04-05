<?php
/*
Template Name: Custom2
*/
?>
<?php
/**
 * @package WordPress
 * @subpackage Genesis
 */

get_header(); ?>

<div id="content" class="page">
  <section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <h1>
        <?php the_title(); ?>
      </h1>
      <div id="page-wrap">
	  <?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      <?php edit_post_link('EDIT', '<p>', '</p>'); ?>
      </div>
    </article>
    <?php endwhile; endif; ?>
  </section>
</div>
<?php get_footer(); ?>