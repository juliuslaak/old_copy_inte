<?php
/**
 * The template for displaying the footer
 */
?>
<!-- END OF MAIN CONTENT RIGHT SIDE -->

            </div>          

            <!-- END MAIN SITE -->

            

        </div>
        <!-- END OF super -->

<footer>

    <section class="footer-bottom block-group font-second">
        <ul class="block">
            <a href="/meist"><li>Meist</li></a>
            <a href="/kontakt"><li>Kontakt</li></a>
            <a href="/privaatsustingimused"><li>Privaatsustingimused</li></a>
            <a href="/pressile"><li>Pressile</li></a>
            <a href="/kkk"><li>KKK</li></a>
        </ul>
        <div class="copyright block">
            <span>&copy; <?php the_time('Y'); ?> Intelige</span>
        </div
    </section>

</footer>





        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script> <!-- Avoid `console` errors in browsers that lack a console. -->  
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.core.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.widget.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.accordion.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.tabs.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.totop.min.js" type="text/javascript"></script><!-- UItoTop plugin -->
        <?php if(is_home() || is_page()){echo '<script src="'.get_template_directory_uri().'/js/camera.js"></script>'; }?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/intelige.js"></script> <!-- Intelige jQuery -->
        
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5348447a4007b0ba"></script>
        <!--[if lt IE 8]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/ie7.js"></script>
        <![endif]-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            /*var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));*/
        </script>

    <?php wp_footer(); ?>
    </body>
</html>
