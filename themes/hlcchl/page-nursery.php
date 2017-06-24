<?php
/**
 * Template Name: Nursery Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<section id="nursery">
  <div class="container">
    <div class="row">

      <?php if (get_field('nursery_image')) { ?>
      <!-- BLURB SECTION
      ================================================== -->
      <div class="col-md-6">
        <?php the_field('nursery_copy'); ?>
      </div><!-- col -->

      <!-- IMAGE SECTION
      ================================================== -->
      <div class="col-md-6">
        <?php
        $nursery_image = get_field('nursery_image');
        ?>
        <img src="<?php echo $nursery_image['url']; ?>" alt="<?php echo $nursery_image['alt']; ?>">
      </div><!-- col -->

      <?php } else { ?>
      <!-- BLURB SECTION
      ================================================== -->
      <div class="col-md-6 col-md-offset-3">
        <?php the_field('nursery_copy'); ?>
      </div><!-- col -->
      <?php } ?>

    </div><!-- row -->
  </div><!-- container -->
</section>

<?php
get_footer();
