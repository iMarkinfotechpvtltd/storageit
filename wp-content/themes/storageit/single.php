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
        <div class="container">
            <div class="inner_conten">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="heading">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-sm-5 post-lft">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col-sm-7 post-rt">
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