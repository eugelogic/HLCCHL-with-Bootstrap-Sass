<?php
/**
 * Template Name: Support Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<!-- TOP SECTION
================================================== -->
<section id="support-top-section">
 <div class="container">
   <div class="row">
     <?php the_field('top_section_copy'); ?>
   </div><!-- row -->
 </div><!-- container -->
</section>

<!-- CTAs SPLIT SECTION
================================================== -->
<section id="support-ctas">
 <div class="container">
   <div class="row">

     <!-- Left Hand Side CTA
     ================================================== -->
     <div class="col-md-6">
       <?php the_field('lhs_cta_copy'); ?>
       <div class="btn-case">
         <p><a href="<?php the_field('lhs_cta_button_link'); ?>" target="_blank" class="btn btn-primary btn-left" role="button"><?php the_field('lhs_cta_button_text'); ?></a></p>
       </div><!-- btn-case -->
     </div><!-- col -->

     <!-- Right Hand Side CTA
     ================================================== -->
     <div class="col-md-6">
       <?php the_field('rhs_cta_copy'); ?>
       <div class="btn-case">
         <p><a href="<?php the_field('rhs_cta_button_link'); ?>" target="_blank" class="btn btn-primary btn-right" role="button"><?php the_field('rhs_cta_button_text'); ?></a></p>
       </div><!-- btn-case -->
     </div><!-- col -->

   </div><!-- row -->
 </div><!-- container -->
</section><!-- support-ctas -->

<!-- JOIN US SECTION
================================================== -->
<section id="support-join-us">
 <div class="container">
   <div class="row">

     <!-- Join Us Blurb
     ================================================== -->
     <div class="col-md-6">
       <?php the_field('join_us_blurb'); ?>
     </div><!-- col -->

     <!-- Join Us Image
     ================================================== -->
     <div class="col-md-6">
       <?php
       $join_us_image = get_field('join_us_img');
       ?>
       <img src="<?php echo $join_us_image['url']; ?>" alt="<?php echo $join_us_image['alt']; ?>">
     </div><!-- col -->

   </div><!-- row -->
 </div><!-- container -->
</section>

<?php
get_footer();
