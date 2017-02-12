<?php
/**
 * The template for displaying all pages
 *
 */

get_header(); ?>

	<div id="main" class="blank_page block">

		<!-- EMPTY PAGE -->
	    <div class="page_left block-group">
	    		<?php while ( have_posts() ) : the_post(); ?>
	            <!-- BREADCRUMBS -->
	            <div class="breadcrumb block">
	                <a href="index.html">Peavool</a><span>/</span><?php the_title(); ?>
	            </div>
	            <!-- // BREADCRUMBS -->

	            <!-- pealkiri -->
	            <div class="post_title font-vollkorn block">
	                <?php the_title(); ?>
	            </div>
	            <!-- // pealkiri -->

	            <section class="page_section block">
	                
	                <?php the_content(); ?>

	            </section>
	            <?php endwhile; // end of the loop. ?>
	    </div>

	    <!-- // EMPTY PAGE -->

			
				
			

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>