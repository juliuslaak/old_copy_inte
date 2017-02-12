<?php
/**
 * The sidebar 
 *
 */
?>



<?php if( !is_category() ) : ?>

<!-- MAIN CONTENT RIGHT SIDE -->

<aside class="main-right">
    <div class="main-right-section">
        <h4 class="river-heading font-vollkorn">Populaarseimad</h4>
        <div id="accordion">
            <?php
				query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
                $count = 0; # only top x posts
				if (have_posts()) : while (have_posts()) : the_post(); 
				$count++; ?>
				<h3 class="font-open"><span class="pop-no"><?php echo $count; ?>. </span><?php the_title(); ?></h3>
	            <div class="font-second">
	                <p><?php echo get_post_meta(get_the_ID(), 'tutvustus', true);?><a class="veel font-exo" href="<?php the_permalink(); ?>">&nbsp;Loe edasi..</a></p>
	            </div>
				<?php
				if ($count == 4){break;}
				endwhile; endif;
				wp_reset_query();
			?>
        </div>
    </div>
    <div class="main-right-section">
        <!-- Right column news group -->
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <!-- AddThis Button END -->
    </div>
    <div class="main-right-section">


    <?php 

    /**
    *
    *   Given category, last 5 and 5 most read
    */

    // most read posts
    wp_reset_query();
    $cats = get_categories('exclude=4');


    foreach ($cats as $cat) { ?>
        <?php $tab = 0; ?>
            <!-- Right column news group -->
        <h2 class="river-heading font-vollkorn"><?php echo $cat->name; ?></h2>
        <div class="tabbable">
            <ul class="font-open">
                <li class="river-tab"><a href="#tab<?php echo $tab; ?>" data-toggle="tab">Viimased</a></li>
                <li class="river-tab"><a href="#tab<?php echo $tab+1; ?>" data-toggle="tab">Loetuimad</a></li>
            </ul>

            <ul id="tab<?php echo $tab; ?>">
            <?php

                global $post;
                $cat_last = get_cat_last_posts($cat);
                foreach ($cat_last as $post) { ?>
                <?php setup_postdata($post);//var_dump($last); ?>
                <li class="river-item clearfix">
                    <a href="<?php echo get_permalink($post->ID); ?>" title="Loe lähemalt">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id() );?>
                        <img class="river-img grayover" src="<?php echo $url; ?>" alt="" />
                        <h4 class="river-title font-open"><?php echo the_title(); ?>
                            <span class="river-count font-source"> (<?php comments_number( '0', '1', '%' ); ?>)</span>
                        </h4>
                    </a>
                </li>
            <?php 
            } //foreach cat_posts
            ?>

            </ul>

            <ul id="tab<?php echo $tab+1; ?>">
            <?php
            
            $cat_most = get_cat_mostread_posts($cat);
            foreach ($cat_most as $post) { ?>
                <li class="river-item clearfix">
                    <a href="<?php echo get_permalink( $post->ID ); ?>" title="Loe lähemalt">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                        <img class="river-img grayover" src="<?php echo $url; ?>" alt="" />
                        <h4 class="river-title font-open"><?php echo $post->post_title; ?>
                            <span class="river-count font-source"> (<?php comments_number( '0', '1', '%' ); ?>)</span>
                        </h4>
                    </a>
                </li>
            <?php 
            } //foreach cat_posts
            $tab += 2;
            ?>


            </ul>
        </div>

    <?php 
    }// foreach $cats
    ?>







        
                <!-- Right column news group --
        <h2 class="river-heading font-vollkorn">Title</h2>
        <div class="tabbable">
            <ul class="font-open">
                <li class="river-tab"><a href="#tab3" data-toggle="tab">See nädal</a></li>
                <li class="river-tab"><a href="#tab4" data-toggle="tab">Varasem</a></li>
            </ul>
            <ul id="tab3">
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="<?php echo get_template_directory_uri(); ?>/img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="<?php echo get_template_directory_uri(); ?>/img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="<?php echo get_template_directory_uri(); ?>/img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
            </ul>
            <ul id="tab4">
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="<?php echo get_template_directory_uri(); ?>/img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="<?php echo get_template_directory_uri(); ?>/img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="<?php echo get_template_directory_uri(); ?>/img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
            </ul>
        </div -->
    </div>
</aside>

<?php else : ?>

<!-- MAIN CONTENT RIGHT SIDE -->

<aside class="main-right">

    <div class="main-right-section">
        <h4 class="river-heading font-vollkorn">Sektsiooni populaarseimad</h4>
        <div id="accordion">
            <?php
                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $actual_link = explode("/", $actual_link);
                $category_slug = $actual_link[count($actual_link)-1];
                $cat_obj = get_category_by_slug($category_slug);
                query_posts('cat=' . $cat_obj->term_id . '&meta_key=post_views_count&orderby=meta_value_num&order=DESC');
                $count = 0; # only top x posts
                if (have_posts()) : while (have_posts()) : the_post(); 
                $count++; ?>
                <h3 class="font-open"><span class="pop-no"><?php echo $count; ?>. </span><?php the_title(); ?></h3>
                <div class="font-second">
                    <p><?php echo get_post_meta(get_the_ID(), 'tutvustus', true);?><a class="veel font-exo" href="<?php the_permalink(); ?>">&nbsp;Loe edasi..</a></p>
                </div>
                <?php
                if ($count == 5){break;}
                endwhile; endif;
                wp_reset_query();
            ?>
        </div>
    </div>
    <div class="main-right-section">
        <!-- Right column news group -->
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <!-- AddThis Button END -->
    </div>
    <!--div class="main-right-section">
        <!-- Right column news group --
        <h2 class="river-heading font-vollkorn">Rubriik 1</h2>
        <div class="tabbable">
            <ul class="font-open">
                <li class="river-tab"><a href="#tab1" data-toggle="tab">Uusimad</a></li>
                <li class="river-tab"><a href="#tab2" data-toggle="tab">Populaarseimad</a></li>
            </ul>
            <ul id="tab1">
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
            </ul>
            <ul id="tab2">
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
            </ul>
        </div>
                <!-- Right column news group --
        <h2 class="river-heading font-vollkorn">Rubriik 2</h2>
        <div class="tabbable">
            <ul class="font-open">
                <li class="river-tab"><a href="#tab3" data-toggle="tab">Uusimad</a></li>
                <li class="river-tab"><a href="#tab4" data-toggle="tab">Populaarseimad</a></li>
            </ul>
            <ul id="tab3">
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/thumb_1.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
            </ul>
            <ul id="tab4">
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
                <li class="river-item clearfix">
                    <a href="#" title="Loe lähemalt">
                        <img class="river-img grayover" src="img/road.jpg" alt="" />
                        <h4 class="river-title font-open">Mingisugune pealkiri mis võib minna väga pikaks aga selle peaks paika panema
                            <span class="river-count font-source"> (28)</span>
                        </h4>
                    </a>
                </li>
            </ul>
        </div>
    </div -->
</aside>

<!-- END OF MAIN CONTENT RIGHT SIDE -->


<?php endif; ?>