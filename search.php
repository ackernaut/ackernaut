<?php
/**
 * @package WordPress
 * @subpackage Genesis
 */

get_header(); ?>

<div id="content" class="index">
  <section>
    <?php if (have_posts()) : ?>
    <h1>Search Results</h1>
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
    </div>
    <?php endif; ?>
    <?php else : ?>
    <h1>Oup! Try a different search?</h1>
    <?php endif; ?>
  </section>
</div>
<?php get_footer(); ?>
