<?php
/**
 * @package WordPress
 * @subpackage Genesis
 */
/*
Template Name: Archive
*/
get_header();
?>

<div id="content" class="index">
  <section>
    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h1>Archive for the &#8216;
      <?php single_cat_title(); ?>
      &#8217; Category</h1>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h1>Posts Tagged &#8216;
      <?php single_tag_title(); ?>
      &#8217;</h1>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h1>Archive for
      <?php the_time('F jS, Y'); ?>
    </h1>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h1>Archive for
      <?php the_time('F, Y'); ?>
    </h1>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h1>Archive for
      <?php the_time('Y'); ?>
    </h1>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h1>Author Archive</h1>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h1>Blog Archives</h1>
      <?php } ?>
    <?php get_sidebar(); ?>
    <div id="index">
      <?php if (show_posts_nav()) : ?>
      <nav>
        <ul>
          <li>
            <?php next_posts_link('&laquo; Older Entries') ?>
          </li>
          <li>
            <?php previous_posts_link('Newer Entries &raquo;') ?>
          </li>
        </ul>
      </nav>
      <?php endif; ?>
      <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a></h2>
        <div class="pubdate"> <span>Transmitted on</span>
          <?php the_time('F jS, Y') ?>
        </div>
        <footer>
          <ul>
            <li><span>Category:</span>
              <?php the_category(', ') ?>
            </li>
            <li class="tags">
              <?php the_tags('<span>Tags:</span> ', ', ', ''); ?>
            </li>
            <li>
              <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            </li>
            <?php edit_post_link('Edit', '<li>', '</li>'); ?>
          </ul>
        </footer>
      </article>
      <?php endwhile; ?>
      <?php if (show_posts_nav()) : ?>
      <nav>
        <ul>
          <li>
            <?php next_posts_link('&laquo; Older Entries') ?>
          </li>
          <li>
            <?php previous_posts_link('Newer Entries &raquo;') ?>
          </li>
        </ul>
      </nav>
      <?php endif; ?>
      <?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>
    </div>
  </section>
</div>
<?php get_footer(); ?>
