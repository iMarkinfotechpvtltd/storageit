<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

            <footer class="display_block">
                <div class="top_footer display_block wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 links">
                                <div class="row">
                                    <div class="links_row col-sm-4 col-xs-4">
                                        <h5>ABOUT US</h5>
                                        <ul class="footer_links">
                                            <?php wp_nav_menu( array( 'theme_location' => 'footer_about_us', 'container' => '', 'menu_class' => 'navigation' ) ); ?>
                                        </ul>
                                        <ul class="social_links">
										<li>
										<?php
		                                $face=get_option_tree('facebook');
		                                if($face==""){}else{ ?>
										<a target="_blank" href="<?php echo $face; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?></li>

                                            <li>
											<?php
											$twi=get_option_tree('twitter');
											if($twi==""){}else { ?>
											<a target="_blank" href="<?php echo $twi; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php }?></li>
											
                                            <li>
											<?php
											$insta=get_option_tree('instagram');
											if($insta==""){}else { ?>
											<a target="_blank" href="<?php echo $insta; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?></li>
                                        </ul>
                                    </div>
                                    <div class="links_row col-sm-4 col-xs-4">
                                        <h5>QUICK LINKS</h5>
                                        <ul class="footer_links">
                                            <?php wp_nav_menu( array( 'theme_location' => 'quick_links', 'container' => '', 'menu_class' => '' ) ); ?>
                                        </ul>
                                    </div>
                                    <div class="links_row col-sm-4 col-xs-4 resp_non">
                                        <h5>&nbsp;</h5>
                                       <ul class="footer_links">
                                       <?php wp_nav_menu( array( 'theme_location' => 'quick_links_rightside', 'container' => '', 'menu_class' => '' ) ); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 news_letter">
                                <div class="news-letter">
                                    <h5>NEWSLETTER</h5>
                                    <small><?php echo get_option_tree('text_on_newslatter'); ?></small>
                                    <div class="newsletter_form display_block">
                                            <?php echo do_shortcode('[mc4wp_form id="81"]'); ?>
                                    </div>
                                </div>
                                <div class="get_in">
                                    <div class="top_get">
                                        <h5>GET IN TOUCH</h5>
                                        <a href="mailto:<?php echo get_option_tree('email'); ?>" target="_top"><?php echo get_option_tree('email'); ?></a>
                                    </div>
                                    <div class="btm_get">
                                        <h5>Call Us</h5>
                                        <p>Need help? Gives us a call</p>
                                        <div class="tel_footer display_block">
                                            <a href="tel:<?php echo get_option_tree('enter_first_number'); ?>"><?php echo get_option_tree('enter_first_number'); ?></a> &#44; <a href="tel:<?php echo get_option_tree('enter_second_number'); ?>"><?php echo get_option_tree('enter_second_number'); ?></a></div>
                                    </div>
                                    <div class="Find_us display_block">
                                        <h5><a href="<?php echo get_option_tree('find_us_link'); ?>">Find Us</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="privacy_cont display_block">
                    <div class="container">
                        <div class="ftr_nav">
                            <ul>
                               <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'menu_class' => '' ) ); ?>
                            </ul>
                        </div>
                        <div class="imk_cont">
                            <span>
                               Powered by <a target="_blank" href="http://imarkinfotech.com">iMark Infotech</a>
                            </span>
                        </div>
                        <div class="pull-right ftr">
                            <p>© <?php the_time("Y") ; ?> <?php echo get_option_tree('copy_right'); ?></p>
                        </div>
                    </div>
                </div>
				
            </footer>
<?php wp_footer(); ?>
        </div>
		
    </div>


<div class="script">


        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <!-- wow-->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
        <script type="text/javascript">
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 140,
                mobile: true,
                live: true,
                callback: function (box) {},
                scrollContainer: null
            });
            wow.init();
        </script>

        <!-- header-fixed--->
        <script>
            jQuery(window).scroll(function () {

                if (jQuery(this).scrollTop() > 100) {
                    jQuery('header').addClass('off-canvas');
                } else {
                    jQuery('header').removeClass('off-canvas');
                }
            });
        </script>
<!--<script>
jQuery(".custom a").each(function() {   
    if (this.href == window.location.href) {
        jQuery(this).addClass("active");
    }
});
</script>-->
        <script>
            jQuery(window).load(function () {
               jQuery(".se-pre-con").fadeOut("slow");;
            });
        </script>
		<script type="text/javascript">
            var windowWidth = jQuery(window).width();
            if (windowWidth <= 991) {
                jQuery('.email_cont').insertAfter('.menu-header-container');
            }
			 if (windowWidth <= 639) {
                jQuery('.history_image').insertAfter('.history_info');
                jQuery('.map').insertAfter('.contact_info');
            }
        </script>
	 <script>
jQuery(document).ready(function(){
var hash = jQuery(location).attr('href');
var abc=hash.split("/");

 if(abc[4]!="")
 {

 jQuery("."+abc[4]).addClass("active");

 }



});
</script>
<script type="text/javascript">
           jQuery(function () {
               jQuery("input[name='name']").keydown(function (e) {
                   if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1) {
                       // let it happen, don't do anything
                       return;
                   }
                   if (e.ctrlKey || e.altKey) {
                       e.preventDefault();
                   } else {
                       var key = e.keyCode;
                       if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                           e.preventDefault();
                       }
                   }
               });
           });
</script>


    <!-- IE Smooth Scrolling -->
    <script type="text/javascript">
        if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
            jQuery('body').on("mousewheel", function () {
                // remove default behavior
                event.preventDefault();

                //scroll without smoothing
                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }
    </script>
    </div>
</body>

</html>
