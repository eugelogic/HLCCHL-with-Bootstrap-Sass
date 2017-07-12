<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<!-- HERO BANNER WITH CTA
================================================== -->
<?php if ( get_field( 'img_background' ) ) { ?>
  <div class="jumbotron" id="hero" style="background: url('<?php the_field( 'img_background' ); ?>') no-repeat scroll center;">
<?php } else { ?>
  <div class="jumbotron" id="hero" style="background-color: #8BCCAF;">
<?php } ?>
  <div class="container">
	<h2><?php the_field( 'hero_title' ); ?></h2>
	<h3><?php the_field( 'hero_copy' ); ?></h3>
	<div class="button-group">
	  <p><a href="<?php the_field( 'left_btn_url' ); ?>" class="btn btn-default btn1" role="button"><?php the_field( 'left_btn_text' ); ?></a></p>
	  <p><a href="<?php the_field( 'right_btn_url' ); ?>" target="_blank" class="btn btn-default btn2" role="button"><?php the_field( 'right_btn_text' ); ?></a></p>
	</div><!-- button-group -->
  </div><!-- container -->
</div><!-- jumbo -->

<!-- BANNER WITH LATEST NEWS
================================================== -->
<div class="jumbotron" id="latest">
  <div class="container">
	<div class="latest-top"><?php the_field( 'latest_top_part' ); ?></div>
	<div class="latest-bottom"><?php the_field( 'latest_bottom_part' ); ?></div>
  </div><!-- container -->
</div><!-- jumbo -->

<!-- HOMEPAGE WIDGETS
================================================== -->
<section id="hp-widgets">
  <div class="container">
	<div class="row">

	  <!-- 1st column
	  ================================================== -->
		<?php if ( get_field( 'left_widget_image' ) ) { ?>
	  <!-- ACF init and vars -->
		<?php
		  $left_widget_image = get_field( 'left_widget_image' );
		?>
		<div class="col-md-4">
		  <a href="<?php the_field( 'left_widget_link' ); ?>"><img src="<?php echo esc_url( $left_widget_image['url'] ); ?>" alt="<?php echo esc_attr( $left_widget_image['alt'] ); ?>"></a>
		<?php } else { ?>
		<div class="col-md-4">
			<a href="<?php the_field( 'left_widget_link' ); ?>"><img src="/wp-content/themes/hlcchl/assets/img/Holly Lodge Community Centre image placeholder.jpg" alt="Holly Lodge Community Centre image placeholder"></a>
		<?php } ?>

		<h3><?php the_field( 'left_widget_title' ); ?></h3>
		<p><?php the_field( 'left_widget_copy' ); ?></p>

		<div class="btn-case">
		  <p><a href="<?php the_field( 'left_widget_link' ); ?>" class="btn btn-default" role="button"><?php the_field( 'left_widget_button_text' ); ?></a></p>
		</div><!-- btn-case -->

	  </div><!-- col -->

	  <!-- 2nd column
	  ================================================== -->
		<?php if ( get_field( 'central_widget_image' ) ) { ?>
	  <!-- ACF init and vars -->
		<?php
		$central_widget_image = get_field( 'central_widget_image' );
		?>
	  <div class="col-md-4">
		<a href="<?php the_field( 'central_widget_link' ); ?>"><img src="<?php echo esc_url( $central_widget_image['url'] ); ?>" alt="<?php echo esc_attr( $central_widget_image['alt'] ); ?>"></a>
		<?php } else { ?>
		<div class="col-md-4">
		  <a href="<?php the_field( 'central_widget_link' ); ?>"><img src="/wp-content/themes/hlcchl/assets/img/Holly Lodge Community Centre image placeholder.jpg" alt="Holly Lodge Community Centre image placeholder"></a>
		<?php } ?>

		<h3><?php the_field( 'central_widget_title' ); ?></h3>
		<p><?php the_field( 'central_widget_copy' ); ?></p>

		<div class="btn-case">
		  <p><a href="<?php the_field( 'central_widget_link' ); ?>" class="btn btn-default" role="button"><?php the_field( 'central_widget_button_text' ); ?></a></p>
		</div><!-- btn-case -->

	  </div><!-- col -->

	  <!-- 3rd column
	  ================================================== -->
		<?php if ( get_field( 'right_widget_image' ) ) { ?>
	  <!-- ACF init and vars -->
		<?php
		$right_widget_image = get_field( 'right_widget_image' );
		?>
	  <div class="col-md-4">
		<a href="<?php the_field( 'right_widget_link' ); ?>"><img src="<?php echo esc_url( $right_widget_image['url'] ); ?>" alt="<?php echo esc_attr( $right_widget_image['alt'] ); ?>"></a>
		<?php } else { ?>
		<div class="col-md-4">
		  <a href="<?php the_field( 'right_widget_link' ); ?>"><img src="/wp-content/themes/hlcchl/assets/img/Holly Lodge Community Centre image placeholder.jpg" alt="Holly Lodge Community Centre image placeholder"></a>
		<?php } ?>

		<h3><?php the_field( 'right_widget_title' ); ?></h3>
		<p><?php the_field( 'right_widget_copy' ); ?></p>

		<div class="btn-case">
		  <p><a href="<?php the_field( 'right_widget_link' ); ?>" class="btn btn-default" role="button"><?php the_field( 'right_widget_button_text' ); ?></a></p>
		</div><!-- btn-case -->

	  </div><!-- col -->

	</div><!-- row -->
  </div><!-- container -->
</section>

<?php
get_footer();
