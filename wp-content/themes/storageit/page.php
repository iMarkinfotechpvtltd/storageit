<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
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
<div class="container"> 
    <div class="about-page">
		<?php while (have_posts()) : the_post(); ?>
           <div class="heading">
              <h1><?php the_title(); ?></h1>
           </div>
           <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
			         <?php the_post_thumbnail(); ?>
                     <?php the_content(); ?>
               </div>  
           </div>
          <?php endwhile; ?>
    </div>   
</div>
</div>

<?php get_footer(); ?>
