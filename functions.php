<?php 
function mytheme_setup() {

register_nav_menus(
array(
'footer_nav' => __( 'Footer Menu', 'bootpress' ),
'top_menu' => __( 'Top Menu', 'bootpress' )
)
);

}
add_action( 'after_setup_theme', 'mytheme_setup' );



// Register Custom Navigation Walker
require_once('walker.php');

add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size('blog_entry',1900, 600,array( 'center', 'center'));
set_post_thumbnail_size('cuadros_featured',275, 183,true);

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}