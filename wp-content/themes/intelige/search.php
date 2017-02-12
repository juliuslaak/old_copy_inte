<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Intelige
 */
 
get_header(); 

// The Query
//$the_query = new WP_Query( $args ); ?>

<div class="breadcrumb block">
    <a href="/">Peavool</a><span>/</span>Otsing: <?php echo esc_attr( get_search_query() ); ?>
</div>

<div class="post_title font-open block">Otsingu tulemused</div>

<section class="search_results block-group">
<ul>
<?php if (have_posts()) : ?>


	<?php while (have_posts()) : the_post(); ?>
		<?php global $post; ?>

		<div <?php post_class(); ?>>
			<h3 class="font-vollkorn" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
			<small><?php echo get_the_time('j. F Y H:i', $post->ID); ?></small>

			<p class="postmetadata"><?php printf(__('Kategooriad: %s', 'kubrick'), get_the_category_list(', ')); ?> <?php edit_post_link(_('Muuda'), ' | ', ' | '); ?>  </p>
		</div>

	<?php endwhile; ?>

<div class="navigation">
	<div class="alignleft"><?php next_posts_link(__('&laquo; Vanemad postitused', 'kubrick')) ?></div>
	<div class="alignright"><?php previous_posts_link(__('Uuemad postitused &raquo;', 'kubrick')) ?></div>
</div>
<?php else : ?>

	<h2>Vabandame, otsitut ei leitud. </h2>

<?php endif; ?>
</ul>
</div>

    <div class="search_popular block">

        <h2 class="latest_title font-vollkorn">Populaarseimad uudised</h2>
        <ul class="latest_posts block-group">
        <?php
        	// popular posts
			query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
            $count = 0; # only top x posts
			if (have_posts()) : while (have_posts()) : the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
			$count++; ?>
			<li>
                <a href="<?php the_permalink(); ?>">
                    <div class="search_popular_item block">
                        <div class="rec_scal_img_wrap">
                            <div class="scalable_img" style="background-image: url(<?php echo $thumb[0]; ?>)">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
                            </div> 
                        </div>
                        <div class="recommended_title font-open"><?php the_title(); ?></div>
                    </div>
                </a>
            </li>
			<?php
			if ($count == 5) { break; }
			endwhile; endif;
			wp_reset_query(); ?>
                                                                                     
        </ul>
    </div>
</section>

<?php
get_footer(); ?>