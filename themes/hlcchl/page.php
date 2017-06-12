<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<section id="default-tml">
  <div class="container">
    <div class="row">

      <!-- CONTENT SECTION
      ================================================== -->
      <div class="col-sm-offset-1 col-md-11">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'default' );

					endwhile; // End of the loop.
				?>
      </div><!-- col -->

    </div><!-- row -->
  </div><!-- container -->
</section>

<?php
get_footer();
