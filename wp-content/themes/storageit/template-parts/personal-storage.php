<?php
/**
 * Template Name: Personal Storage Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

        <div class="paddig-top">
          <?php 
		    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'banner_image' );
		      if($image==""){
			?>
            <div class="banner display_block  wow fadeIn" style="background-image:url(http://placehold.it/1920x648&amp;text=1920x648);)">
			
			<?php }	else{  ?>
               <div class="banner display_block  wow fadeIn"  style="background-image:url(<?php echo $image[0]; ?>);">
		   <?php } ?>
                <div class="container">
                    <div class="inner_banner">
                        <h2><?php echo get_option_tree('banner_heading_text'); ?></h2>

                        <div class="banner_button text-center display_block">
                            <a href="<?php echo get_option_tree('first_link'); ?>" class="custom"><?php echo get_option_tree('first_link_name_of_banner'); ?></a>
                            <a href="<?php echo get_option_tree('second_link'); ?>" class="custom"><?php echo get_option_tree('second_link_name_of_banner'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="storage_info display_block">
                <div class="container">
                    <div class="text-center">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content();?>
                        <?php endwhile;?>
                        <div class="storage_content display_block">
                            <p class="wow fadeInUp"><?php the_field('think_of_all_the_reasons',8); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabs_storage display_block">
                <div class="container">
                    <div class="row">
                        <div class="tabs-main display_block">
                            <ul class="nav nav-tabs wow fadeInUp">
							<?php	
								$i=1;
								$args = array('post_type' => 'personalstorage','posts_per_page'=>-1,'order'=>'DESC');
                                $loop = new WP_Query( $args );
								
                                while ( $loop->have_posts() ) : $loop->the_post();
                                 ?>
                                <li class="col-sm-3 <?php if($i==1){echo'active';}?>"><a data-toggle="tab" href="#mnu<?php echo $i; ?>"><?php the_title(); ?></a></li>
								<?php
                                $i++;								
								endwhile;
								wp_reset_query();
								?>
                            </ul>
                            <div class="tab-content col-sm-12 wow fadeInUp">
							<?php	
								$i=1;
								$args = array('post_type' => 'personalstorage','posts_per_page'=>-1,'order'=>'DESC');
                                $loop = new WP_Query( $args );
								
                                while ( $loop->have_posts() ) : $loop->the_post();
                                 ?>
                                <div id="mnu<?php echo $i;?>" class="tab-pane fade <?php if($i==1){echo'in active';}?>">
                                    <div class="ineer_content display_block">
                                        <div class="mn_cntn display_block">
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="contact_tabs display_block">
                                            <strong>To book a container or to find out more:</strong>
                                            <div class="tabs_no display_block">
                                                <a href="tel:01698619150">01698 619150</a> &#44;
                                                <a href="tel:01555435001">01555 435001</a>
                                            </div>
                                            <div class="display_block">
                                                <a class="contact_us" href="">CONTACT US HERE</a></div>
                                        </div>
                                    </div>

                                </div>
                               <?php
                                $i++;								
								endwhile;
								wp_reset_query();
								?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider_cont display_block">
                <div class="container">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
						<?php	$args = array('post_type' => 'testimonial','posts_per_page'=>'5','order'=>'DESC');
                         $loop = new WP_Query( $args );
                         $i=0;
                         while ( $loop->have_posts() ) : $loop->the_post();
                          ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class=""></li>
                            <!--<li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>-->
							<?php 
							$i++;
							endwhile;?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
						<?php	$args = array('post_type' => 'testimonial','posts_per_page'=>'5','order'=>'DESC');
                        $loop = new WP_Query( $args );
                        $i=0;
                        while ( $loop->have_posts() ) : $loop->the_post();
						$class = $i == 0 ? ' active' : '';
                         ?>
						
                            <div class="item <?php echo $class; ?>">
                                <figure class="client_image text-center">
                                   <span><?php the_post_thumbnail(testimonial_image); ?></span>
                                    <figcaption><?php the_title(); ?></figcaption>
                                </figure>
                                <div class="content_slider text-center display_block">
                                   <p><img class="quot_lft" src="<?php echo get_template_directory_uri(); ?>/images/quote-left.png" alt=""> 
									<?php echo $post->post_content; ?> <img class="quot_right" src="<?php echo get_template_directory_uri(); ?>/images/quote-right.png" alt=""></p>
                                </div>
								
                            </div>
                                <?php
					            $i++;
					            endwhile;?>
                           <!-- <div class="item">
                                <figure class="client_image text-center">
                                    <img src="<?php// echo get_template_directory_uri(); ?>/images/client_img.jpg" alt="img">
                                    <figcaption>John</figcaption>
                                </figure>
                                <div class="content_slider text-center display_block">
                                    <p> <img class="quot_lft" src="<?php //echo get_template_directory_uri(); ?>/images/quote-left.png" alt=""> Storageit offered us the perfect flexible solution whilst moving home! The storage provided was accessible <img class="quot_right" src="<?php// echo get_template_directory_uri(); ?>/images/quote-right.png" alt=""></p>
                                </div>
                            </div>

                            <div class="item">
                                <figure class="client_image text-center">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/images/client_img.jpg" alt="img">
                                    <figcaption>John</figcaption>
                                </figure>
                                <div class="content_slider text-center display_block">
                                    <p> <img class="quot_lft" src="<?php// echo get_template_directory_uri(); ?>/images/quote-left.png" alt=""> Storageit offered us the perfect flexible solution whilst moving home! The storage provided was accessible <img class="quot_right" src="<?php// echo get_template_directory_uri(); ?>/images/quote-right.png" alt=""></p>
                                </div>
                            </div>

                            <div class="item">
                                <figure class="client_image text-center ">
                                    <img src="<?php// echo get_template_directory_uri(); ?>/images/client_img.jpg" alt="img">
                                    <figcaption>John</figcaption>
                                </figure>
                                <div class="content_slider text-center display_block">
                                    <p> <img class="quot_lft" src="<?php// echo get_template_directory_uri(); ?>/images/quote-left.png" alt=""> Storageit offered us the perfect flexible solution whilst moving home! The storage provided was accessible <img class="quot_right" src="<?php// echo get_template_directory_uri(); ?>/images/quote-right.png" alt=""></p>
                                </div>
                            </div>-->
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>


<?php
get_footer();