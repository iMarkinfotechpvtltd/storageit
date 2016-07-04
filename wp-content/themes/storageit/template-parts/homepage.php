<?php
/**
 * Template Name: Home Page
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
                            <a href="<?php echo get_option_tree('first_link'); ?>" onclick="active();" class="custom"><?php echo get_option_tree('first_link_name_of_banner'); ?></a>
                            <a href="<?php echo get_option_tree('second_link'); ?>"  class="custom"><?php echo get_option_tree('second_link_name_of_banner'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_cont display_block">
                <div class="container">

                    <?php the_field('name_of_service',5); ?>
                    <div class="row">
                        <ul>
						<?php	$args = array('post_type' => 'service','posts_per_page'=>'3','order'=>'DESC');
                             $loop = new WP_Query( $args );
                             while ( $loop->have_posts() ) : $loop->the_post();
                             ?>
                            <li class="col-sm-4 col-xs-4 wow fadeInUp">
							
                                <div class="img_service">
                                    <a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) {
                                     the_post_thumbnail('service');
                                     } else { ?>
                                     <img src="http://placehold.it/459x284&amp;text=No image found" alt="<?php the_title(); ?>"/>
                                      <?php } ?></a>
                                </div>
                                <div class="info_service display_block">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
									<?php content('36'); ?>
                                    
                                </div>
								<a href="<?php the_permalink(); ?>" class="bg_green">Read More</a>
								<?php endwhile;?>
                            </li>
							
                        </ul>
                    </div>
                </div>
            </div>

            <div class="welcome_cont display_block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 welcome_info">
                         <?php while ( have_posts() ) : the_post(); ?>
                         <?php the_content();?>
                         <?php endwhile;?>   
                        </div>
                        <div class="col-sm-7 help_cont pull-right">
                            <h4>How We Can Help</h4>
                            <div class="tabs display_block">
                                <ul class="nav nav-tabs">
								<?php	
								$i=1;
								$args = array('post_type' => 'help','posts_per_page'=>4,'order'=>'DESC');
                                $loop = new WP_Query( $args );
								
                                while ( $loop->have_posts() ) : $loop->the_post();
                                 ?>
                                    <li class="<?php if($i==1){echo'active';}?>"><a data-toggle="tab" href="#mnu<?php echo $i; ?>"><?php the_title(); ?></a></li>
                                   
								<?php
                                $i++;								
								endwhile;
								wp_reset_query();
								?>  
                                </ul>
                                <div class="tab-content">
								<?php	
								$i=1;
								$args = array('post_type' => 'help','posts_per_page'=>4,'order'=>'DESC');
                                $loop = new WP_Query( $args );
								
                                while ( $loop->have_posts() ) : $loop->the_post();
                                 ?>
                                    <div id="mnu<?php echo $i;?>" class="tab-pane fade <?php if($i==1){echo'in active';}?>">
                                        <div class="inner_help display_block">
                                            <div class="help_img wow flipInX">
                                          <?php if ( has_post_thumbnail() ) {
                                     the_post_thumbnail('help_image');
                                     } else { ?>
                                     <img src="http://placehold.it/255x201&amp;text=No image found" alt="<?php the_title(); ?>"/>
                                      <?php } ?>
                                            </div>
                                            <div class="content_help">
                                                <?php the_content(); ?>
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

            </div>
            <div class="history_cont display_block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-5 history_image wow fadeInLeft">
						  <?php
                           $history=get_post_meta(5,"our_history_image",true);
                           $thumb = wp_get_attachment_image_src($history, 'our_history_image' );	
                            ?>
                            <img src="<?php echo $url = $thumb['0'];?>" alt="jpg">
                        </div>
                        <div class="col-sm-6 col-xs-7 history_info pull-right">
                            <?php the_field('our_history',5); ?>
                        </div>

                    </div>
                </div>

            </div>

<?php
get_footer();
