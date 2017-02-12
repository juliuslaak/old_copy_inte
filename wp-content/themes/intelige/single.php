<?php
/**
 * The Template for displaying all single posts
 *
 */

get_header(); ?>

<!-- MAIN SITE -->
<div id="main" class="block-group">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php setPostViews(get_the_ID()); ?>
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<div class="breadcrumb block">
        <a href="/">Peavool</a><span>/</span><?php the_title(); ?>
    </div>


    

		    <div class="post_title font-vollkorn block"><?php the_title(); ?></div>

		    <section class="post_section block-group">
		        <div class="post_wrap_left block">&nbsp;</div>
		        <div class="post_wrap block">
		            <div class="post">
		                <div id="post_top" class="post_top font-second">
		                    <div class="post_top_left"><span><?php echo get_the_time('j. F Y H:i', $post->ID); ?><i class="icon-quill"></i><?php the_author(); ?>
		                        <i class="icon-envelope"></i><a href="mailto:<?php echo antispambot(get_the_author_email()); ?>">Email</a>
		                    </div>
		                    <div title="Loe kommentaare" class="post_top_comments font-open">
		                        <a href="#comments"><i class="icon-bubbles"></i> <?php comments_number( '0', '1', '%' ); ?> </a>
		                    </div>
		                    <div class="clearfix"></div>
		                </div>
		                <div class="post_img_container">
		                    <div class="scalable_img" style="background-image: url(<?php echo $thumb[0]; ?>)">
		                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
		                    </div>
		                </div>
		                <div class="post_img_subtext"><?php thumb_caption(); ?></div>

		                <p class="post_conc font-open"><?php echo get_post_meta(get_the_ID(), 'tutvustus', true);?></p>

		                <?php the_content(); ?>

		            </div>

		        </div>
		        <!-- // post wrap -->
		        <div class="post_wrap_right block">&nbsp;</div>
		    </section>

		    <section>
                <div class="post_wrap_left block">&nbsp;</div>
                <div class="recommended block">
                    <div class="post_bot_social"></div>
                    <h2 class="latest_title font-vollkorn">Sulle võivad veel meeldida</h2>
                    <ul class="latest_posts block-group">
                    <?php
                    $current_post = get_the_ID();
                    $all_cats = wp_get_post_categories($current_post);
                    foreach ($all_cats as $cat_id) {
                    	if ($cat_id != 4){ // leave out "esilehel"
                    		global $post;
	                    	$cat_last = get_cat_last_posts(get_category($cat_id));
	                    	foreach ($cat_last as $post) {
	                    		if($current_post != get_the_ID() ){
	                    			setup_postdata($post);?>
	                    			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
	                    			<li>
			                            <a href="<?php the_permalink(); ?>">
			                                <div class="post_recommended block">
			                                    <div class="rec_scal_img_wrap">
			                                        <div class="scalable_img" style="background-image: url(<?php echo $thumb[0]; ?>)">
			                                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
			                                        </div> 
			                                    </div>
			                                    <div class="recommended_title font-open"><?php the_title(); ?></div>
			                                </div>
			                            </a>
			                        </li>
	                    		<?php }
	                    	}
                    	}
                    }
                    wp_reset_postdata();
                    
                    
					
                    ?>
                    </ul>

                    <div class="comments_wrap">
                        <!-- DISQUS -->
                        <div id="comments"><?php comments_template( '', true ); ?></div>
                        <!-- // DISQUS -->
                    </div>

	<?php endwhile; // end of the loop. ?>

				</div>
                </section>

            </div>          

            <!-- // MAIN SITE -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>