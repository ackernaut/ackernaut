<?php
/*
Template Name: Home2
*/
?>
<?php
/**
 * @package WordPress
 * @subpackage Genesis
 */

get_header(); ?>

<div id="content">
  <section>
    <?php 
		$postslist = get_posts('numberposts=1&order=ASC&orderby=title');
		foreach ($postslist as $post) : 
		setup_postdata($post);
	?>
    <article>
      <h1>
        <?php the_title(); ?>
      </h1>
      <span>
      <?php the_date(); ?>
      </span>
      <p>
        <?php the_excerpt(); ?>
      </p>
    </article>
    <?php endforeach; ?>
  </section>
</div>
<?php get_footer(); ?>
