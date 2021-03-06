<?php
/**
 * Template Name: About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<!-- TOP SECTION
================================================== -->
<section id="about-top-section">
 <div class="container">
   <div class="row">

		<?php if ( get_field( 'top_section_image' ) ) { ?>
	 <!-- BLURB
	 ================================================== -->
	 <div class="col-md-6">
		<?php the_field( 'top_section_copy' ); ?>
	 </div><!-- col -->

	 <!-- IMAGE
	 ================================================== -->
	 <div class="col-md-6">
		<?php
		$top_section_image = get_field( 'top_section_image' );
		?>
	   <img src="<?php echo esc_url( $top_section_image['url'] ); ?>" alt="<?php echo esc_attr( $top_section_image['alt'] ); ?>">
	 </div><!-- col -->

		<?php } else { ?>
	 <!-- BLURB
	 ================================================== -->
	 <div class="col-md-6 col-md-offset-3">
		<?php the_field( 'top_section_copy' ); ?>
	 </div><!-- col -->
		<?php } ?>

   </div><!-- row -->
 </div><!-- container -->
</section>

<!-- MAP SECTION
================================================== -->
<section id="about-map-section">
 <div class="container">
	<?php the_field( 'map' ); ?>
 </div><!-- container -->
</section>

<!-- BOTTOM SECTION
================================================== -->
<section id="about-bottom-section">
 <div class="container">
   <div class="row">

	 <!-- left hand side
	 ================================================== -->
	 <div class="col-md-6">
		<?php the_field( 'bottom_section_lhs_copy' ); ?>
	 </div><!-- col -->

	 <!-- right hand side
	 ================================================== -->
	 <div class="col-md-6">
		<?php
		$bottom_section_rhs_img = get_field( 'bottom_section_rhs_img' );
		?>
	   <img src="<?php echo esc_url( $bottom_section_rhs_img['url'] ); ?>" alt="<?php echo esc_attr( $bottom_section_rhs_img['alt'] ); ?>">
		<?php the_field( 'bottom_section_rhs_content' ); ?>
	 </div><!-- col -->

   </div><!-- row -->
 </div><!-- container -->
</section>

<?php
get_footer();
