<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HLCCHL
 */

get_header(); ?>

<section id="news-single">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">

					<!-- Start the Loop -->
					<?php while ( have_posts() ) : the_post(); ?>

					<!-- NEWS ARTICLE CONTENT
					================================================== -->
					<?php if ( has_post_thumbnail() ) : the_post_thumbnail(); ?>
 					 <?php endif; ?>

					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

					<?php
					/**
					 *		// If comments are open or we have at least one comment, load up the comment template.
					 *		if ( comments_open() || get_comments_number() ) :
					 *			comments_template();
					 * 		endif; ?>
					 */
					 ?>

					<?php endwhile; // End of the loop. ?>

				</div><!-- row -->
			</div><!-- col -->

			<!-- SIDEBAR
			================================================== -->
			<div class="row">
				<aside class="col-sm-4">
					<?php get_sidebar();?>
				</aside>
			</div><!-- row -->

		</div><!-- row -->
	</div><!-- container -->
</section>

<?php
get_footer();
