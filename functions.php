<?php
/**
 * @package WordPress
 * @subpackage Genesis
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
}

/**
 * Conditional Page/Post Navigation Links
 * http://www.ericmmartin.com/conditional-pagepost-navigation-links-in-wordpress-redux/
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

// Read more edit
function remove_more_jump_link($link) { 
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

// This is the new comment markup - edit as you feel necessary
function html5_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
<article <?php comment_class(); ?> id="comment-<?php comment_ID() ?>"><?php echo get_avatar($comment,$size='80',$default='<path_to_url>' ); ?>
  
  <div class="comment-wrap">
    <header class="comment-author vcard"><?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?></header>
    <?php if ($comment->comment_approved == '0') : ?>
    <em>
    <?php _e('Your comment is awaiting moderation.') ?>
    </em>
    <?php endif; ?>
    <div class="comment-meta commentmetadata">
      <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
      <?php edit_comment_link(__('(Edit)'),'  ','') ?>
    </div>
    <?php comment_text() ?>
    <div class="reply">
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php
        }

// Changes the trailing </li> into a trailing </article>
function close_comment() {?>
  </div>
</article>
<?php
}
	
?>