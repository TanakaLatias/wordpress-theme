<?php

add_theme_support( 'post-thumbnails' );

add_action('init', function() {
  add_theme_support('title-tag');
});
add_filter('document_title_parts', 'title_tagline');
function title_tagline($title) {
  if(is_home() || is_front_page()) {
    $title['tagline'] = '';
  }
  return $title;
}
add_filter('document_title_separator', 'title_separator');
function title_separator($separator) {
  $separator = '|';
  return $separator;
}

function meta_description() {
  if(is_single()) {
    $description = get_the_excerpt();
  } else {
    $description = "This is Sawa's English notebook. I'm a Japanese, and I like studying English. I watch many English TV shows. I also talk about English grammar, English phonetics, and English vocabulary.";
  }
  return $description;
}

function enqueue_scripts() {
    wp_enqueue_style("style", get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function mytheme_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
    <div class="each-comment">
      <p class='bold'><?php echo get_comment_author(); ?> ( <?php echo get_comment_date('Y-m-d'); ?> )</p>
      <?php if ($comment->comment_approved == '0') : ?>
        <p>Your comment is awaiting moderation.</p>
      <?php else: ?>
        <p><?php comment_text(); ?></p>
      <?php endif; ?>
    </div>
<?php
}

function custom_excerpt_length($length) {
  return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');

