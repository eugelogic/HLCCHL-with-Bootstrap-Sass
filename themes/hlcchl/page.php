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

      <!-- CONTENT SECTION
      ================================================== -->
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'default' );

					endwhile; // End of the loop.
				?>

  </div><!-- container -->
</section>

<?php
get_footer();
