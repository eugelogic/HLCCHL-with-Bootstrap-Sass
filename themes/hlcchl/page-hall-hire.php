<?php
/**
 * Template Name: Hall Hire Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<!-- BLURB & MAP SECTION
================================================== -->
<section id="blurb-and-map">
 <div class="container">
   <div class="row">

     <!-- BLURB SECTION
     ================================================== -->
     <div class="col-md-8">
       <?php the_field('hall_hire_copy'); ?>
     </div><!-- col -->

     <!-- MAP SECTION
     ================================================== -->
     <div class="col-md-4">
       <?php the_field('hall_hire_map'); ?>
     </div><!-- col -->

   </div><!-- row -->
 </div><!-- container -->
</section>

<!-- GALLERY
================================================== -->
<section id="hall-gallery">
 <div class="container">
   <div class="row">
     <h3><?php the_field('gallery_title'); ?></h3>

     <!-- The Gallery
     ================================================== -->
     <?php the_field('image_gallery'); ?>

   </div><!-- row -->
 </div><!-- container -->
</section>

<!-- BOTTOM PAGE CTA
================================================== -->
<div class="jumbotron" id="bottom-cta">
 <div class="container">
   <div class="row">

     <div class="col-md-8">
       <h3><?php the_field('cta_message'); ?></h3>
     </div><!-- col-md-8 -->

     <div class="col-md-4">
       <div class="btn-case">
         <p><a href="<?php the_field('cta_button_link'); ?>" class="btn btn-primary" role="button"><?php the_field('cta_button_text'); ?></a></p>
       </div><!-- btn-case -->
     </div><!-- col-md-4 -->

   </div><!-- row -->
 </div><!-- container -->
</div><!-- jumbo -->

<?php
get_footer();
