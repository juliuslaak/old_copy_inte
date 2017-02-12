<?php
/**
 * The main template file
 *
 * 
 * 
 */

get_header(); ?>
<div class="top-wrap block-group">
    <div class="top-news-left block">
    	<div class="camera_wrap" id="camera_wrap_1">
            <?php

        	global $post;
			$args = array( 'numberposts' => 4, 'category_name' => 'esilehel' );
			$esilehel = get_posts( $args ); 
			foreach( $esilehel as $post ): setup_postdata($post); ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div data-src="<?php echo $image[0]; ?>" data-link="<?php the_permalink(); ?>" data-thumb="<?php the_post_thumbnail('thumbnail'); ?>">
                    <div class="camera_caption moveFromLeft">
                        <h2><?php the_title(); ?></h2>
                        <div class="slide_descr"><?php echo get_post_meta(get_the_ID(), 'tutvustus', true);?></div>
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata();?> 
        </div>
    </div>
    <div class="top-news-right block">
        <!-- Only first 4 will be shown, overflow hidden -->
        <ul class="top-news-ul">
            <!-- Top right news item -->
            <?php

            $args = array( 'numberposts' => 4, 'category_name' => 'esilehel' );
			$esilehel = get_posts( $args ); 
			foreach( $esilehel as $post ): setup_postdata($post); ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
				<a href="<?php the_permalink(); ?>" class="item-a" title="Loe lähemalt">
                    <li class="top-right-item block-group">
                            <div class="top-right-img block" style="background-image: url(<?php echo $thumb[0]; ?>)">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
                            </div>
                            <div class="top-right-title block font-source">
                                <h4><?php the_title(); ?></h4>
                            </div>
                    </li>
                </a>
        	<?php endforeach; wp_reset_postdata();?>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT LEFT SIDE -->

<div class="main-left">

    <div class="block-group">
    	<?php $args = array(
			'posts_per_page'   => 10,
			'offset'           => 0,
			'category'         => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true ); 
		$all_posts = get_posts( $args ); 
		foreach ( $all_posts as $post ) : setup_postdata($post); ?> 
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
			<!-- News box -->
	        <section class="main-news-box block">
	            
	                <div class="new-box-header clearfix">
	                    <span class="news-date"><?php echo get_the_time('j. F Y H:i', $post->ID); ?></span>
	                    <div title="Loe kommentaare" class="news-box-com">
	                        <a href="<?php echo get_comments_link( $post->ID ); ?>"><i class="comments-icon icon-bubbles"></i></a>
	                        <span class="comments-count font-open"> <?php comments_number('0','1','%'); ?></span>
	                    </div>
	                </div>
	                <a class="news-box-a" href="<?php the_permalink(); ?>">
	                <div class="main-hover-img">
	                    <div class="news-css-image" style="background-image: url(<?php echo $thumb[0]; ?>)">
	                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
	                    </div>
	                    <div class="table">
		                    <div class="img-desc">
		                        <p><?php echo get_post_meta(get_the_ID(), 'tutvustus', true);?> 
		                            <span class="font-exo">Jätka lugemist..</span>
		                        </p>
		                    </div>
		                </div>
	                </div> 
	                <div class="news-box-descr font-open">
	                    <h2><?php the_title(); ?></h2>
	                </div>
	            	</a>
	        </section>

		<?php endforeach; wp_reset_postdata(); ?>
        
        <!-- LOAD MORE NEWS -->
        <!-- a class="load-a" href="#">
            <div class="load-more block"><span class="font-open load-span">Lae 10 järgmist artiklit</span></div>
        </a -->
    </div>
</div>

<!-- END OF MAIN CONTENT LEFT SIDE -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>