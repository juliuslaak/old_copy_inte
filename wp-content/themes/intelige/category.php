<?php
/*
 *
 *
 *
 */

get_header(); ?>

<div class="breadcrumb block">
    <a href="/">Peavool</a><span>/</span><?php single_cat_title(); ?>
</div>

                

<!-- MAIN CONTENT LEFT SIDE -->

<div class="main-left">
<?php
// selle category populaarseim
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = explode("/", $actual_link);
$category_slug = $actual_link[count($actual_link)-1];
$cat_obj = get_category_by_slug($category_slug);
query_posts('cat=' . $cat_obj->term_id . '&posts_per_page=1&meta_key=post_views_count&orderby=meta_value_num&order=DESC');
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
    <section class="rubriik-top block">
        <a class="rubriik-box-a" href="<?php the_permalink(); ?>">
            <div class="rubriik-hover-img">
                <div class="rubriik-css-image" style="background-image: url(<?php echo $thumb[0]; ?>)">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
                </div>
                <div class="rubriik-desc">
                    <p class="font-primary"><?php echo get_post_meta(get_the_ID(), 'tutvustus', true);?> 
                    <span class="font-exo">Jätka lugemist <i class="icon-arrow-right"></i></span>
                    </p>
                </div>
            </div> 
            <div class="rubriik-box-descr font-open">
                <h2><?php the_title(); ?>
                    <span class="rubriik_top_count font-source"> (<?php comments_number( '0', '1', '%' ); ?>)</span>
                </h2>
            </div>
        </a>
    </section>
<?php endwhile;endif; wp_reset_query();?>
    

    <div class="block-group padding_left_16">
        <?php while( have_posts() ) : the_post(); ?>
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); global $post;?>
        <!-- News box -->
        <section class="main-news-box block">
            <a class="news-box-a" href="<?php the_permalink(); ?>">
                <div class="new-box-header clearfix">
                    <span class="news-date"><?php echo get_the_time('j. F Y H:i', $post->ID); ?><!--20. märts 2014  20:34--></span>
                    <div title="Loe kommentaare" class="news-box-com">
                        <i class="comments-icon icon-bubbles"></i>
                        <span class="comments-count font-open"> <?php comments_number( '0', '1', '%' ); ?></span>
                    </div>
                </div>
                <div class="main-hover-img">
                    <div class="news-css-image" style="background-image: url(<?php echo $thumb[0]; ?>)">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
                    </div>
                    <div class="img-desc">
                        <p><?php echo get_post_meta(get_the_ID(), 'tutvustus', true);?> 
                            <span class="font-exo">Jätka lugemist <i class="icon-arrow-right"></i></span>
                        </p>
                    </div>
                </div> 
                <div class="news-box-descr font-open">
                    <h2><?php the_title(); ?></h2>
                </div>
            </a>
        </section>
        <?php endwhile; ?>
        <!-- LOAD MORE NEWS --
        <a class="load-a" href="#">
            <div class="load-more block"><span class="font-open load-span">Lae 10 järgmist artiklit</span></div>
        </a -->
    </div>
</div>

<!-- END OF MAIN CONTENT LEFT SIDE -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>