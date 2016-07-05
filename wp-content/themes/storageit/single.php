<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    <div class="paddig-top">
        <div class="banner display_block  wow fadeIn" style="background-image:url(<?php echo get_option_tree('post_images_banner'); ?>);">
            <div class="container">
                <div class="inner_banner">
                    <h2><?php echo get_option_tree('banner_heading_text'); ?></h2>

                    <div class="banner_button text-center display_block">
                        <a href="<?php echo get_option_tree('first_link'); ?>" onclick="active();" class="custom">
                            <?php echo get_option_tree('first_link_name_of_banner'); ?>
                        </a>
                        <a href="<?php echo get_option_tree('second_link'); ?>" class="custom">
                            <?php echo get_option_tree('second_link_name_of_banner'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="inner_conten">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="heading">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 inner_mn">
                            <div class="row">
                                <div class="col-sm-5 col-xs-5 post-lft">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col-sm-7 col-xs-7 post-rt">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>