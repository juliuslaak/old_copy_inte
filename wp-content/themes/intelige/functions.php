<?php

add_theme_support( 'post-thumbnails' ); 

//remove_filter('the_content', 'wpautop');

# Disables all core updates:
define( 'WP_AUTO_UPDATE_CORE', false );

function hide_wp_update() {
    remove_action( 'admin_notices', 'update_nag', 3); //update notice at the top of the screen
}
add_action('admin_menu','hide_wp_update'); 

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function remove_excerpt_tags( $string ){
    $tags = array("<p>", "</p>");
    $return = str_replace($tags, "", $string);
    return $return;
}

add_filter( 'get_the_excerpt' , 'remove_excerpt_tags', 99 );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Päise menüü' ),
      'footer-menu' => __( 'Jaluse menüü' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count;
}

function setPostViews( $postID ) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function lastPostsEachCat( $nr ){
    wp_reset_query();

    $cats = get_categories('exclude=4');
    foreach ($cats as $cat) {
        $args = array(
        'posts_per_page' => $nr,
        'cat' => $cat->term_id,
        );

        query_posts($args);
        if (have_posts()) {
            echo '<h2>Latest Posts in '.$cat->name.' Category</h2>';
            while (have_posts()) : the_post(); ?>       

            <!-- this area is for the display of your posts the way you want it -->
            <!-- i.e. title, exerpt(), etc. -->

            <?php endwhile;
        } 
        wp_reset_query(); 

    }

}
//get category top 5 popular posts
function get_cat_mostread_posts( $kategooria ){
    $loetuimad = query_posts('cat=' . $kategooria->term_id . '&posts_per_page=5&meta_key=post_views_count&orderby=meta_value_num&order=DESC');
    wp_reset_query();
    return $loetuimad;
}
// get category last 5 posts
function get_cat_last_posts( $kategooria ){
    $viimased = query_posts('cat=' .$kategooria->term_id . '&posts_per_page=5');
    wp_reset_query();
    return $viimased;
}

// to get featured image description
function thumb_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo $thumbnail_image[0]->post_excerpt;
  }
}

//add_filter( 'the_content', 'add_bubble', 10 );

function add_bubble($content){
    if( !is_page() ){
        echo $content . '<a href="#comments" alt="" title="Liigu arutelu juurde" class="post_end">Liigu arutelu juurde&nbsp;<i class="icon-bubble"></i></a></p>';
    } else {
        echo $content;
    } 
}

add_filter( 'the_content', 'wpautop', 1 );
