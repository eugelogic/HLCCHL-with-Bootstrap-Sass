<?php
/**
 * Template Name: Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<section id="contact">
  <div class="container">
    <div class="row">

      <!-- BLURB SECTION
      ================================================== -->
      <div class="col-sm-offset-1 col-md-5">
        <?php the_field('contact_copy'); ?>
      </div><!-- col -->

      <!-- FORM SECTION
      ================================================== -->
      <div class="col-md-5">
        <?php the_field('contact_form'); ?>
      </div><!-- col -->

    </div><!-- row -->
  </div><!-- container -->
</section>

<?php
get_footer();
