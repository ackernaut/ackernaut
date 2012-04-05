<?php
/**
 * @package WordPress
 * @subpackage Genesis
 */

get_header(); ?>

<div id="content" class="post">
  <section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <h1>
        <?php the_title(); ?>
      </h1>
      <div id="single-wrap">
        <p class="transmission"><code>&lt;transmission&gt;</code></p>
        <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        <footer>
          <p class="transmission"><code>&lt;/transmission&gt; 
            <?php edit_post_link('&lt;edit transmission&gt;'); ?>
          </code></p>
        </footer>
      </div>
      <?php comments_template(); ?>
    </article>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </section>
  <aside>
    <ul>
      <li id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS: Transmissions from the Ackernaut"><span>Transmissions</span> <br>
        from the Ackernaut</a></li>
      <li class="title">
        <?php the_title(); ?>
      </li>
      <li><span>Transmitted on</span>
        <?php the_time('F jS, Y') ?>
      </li>
      <li><span>Category:</span>
        <?php the_category(', ') ?>
      </li>
      <li class="tags">
        <?php the_tags('<span>Tags:</span> '); ?>
      </li>
      <li>
        <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
      </li>
    </ul>
    <ul>
      <li class="previous">
        <?php previous_post_link('<span>Previous transmission:</span><br/>%link') ?>
      </li>
      <li class="next">
        <?php next_post_link('<span>Next transmission:</span><br/>%link') ?>
      </li>
    </ul>
  </aside>
</div>
<?php get_footer(); ?>
