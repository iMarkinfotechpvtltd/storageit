<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?> 

    <div style="background-image:url('<?php echo get_option_tree('404_page_banner'); ?>')" class="back_img"></div>
    <div class="content-area" id="primary">
        <main role="main" class="site-main" id="main">

            <section class="error-404 not-found">
                <span class="error_numeric">Error 404</span>
                <h1 class="page-title"><span>Oops!</span> That page can’t be found.</h1>
                <!-- .page-header -->

                <p>It looks like nothing was found at this location.</p>

                <!-- .page-content -->
            </section>
            <!-- .error-404 -->

        </main>
        <!-- .site-main -->

        <!--?php get_sidebar( 'content-bottom' ); ?-->

    </div>
    <!-- .content-area -->

    <!--?php get_sidebar(); ?-->
    <?php get_footer(); ?>

        <style>

        </style>