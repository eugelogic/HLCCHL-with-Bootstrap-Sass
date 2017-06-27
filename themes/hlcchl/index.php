	<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package HLCCHL
	 */

	get_header(); ?>

	<!-- NEWS INDEX PAGE
	================================================== -->
	<?php if ( have_posts() ) : ?>

	<section id="news-index-grid">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">

			<!-- Start the Loop -->
			<?php while ( have_posts() ) : the_post(); ?>

			 <!-- NEWS INDEX GRID
			 ================================================== -->
			 <div class="col-md-6">
			 		<div class="post-wrapper">

					 <?php if ( has_post_thumbnail() ) : ?>
					     <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					         <?php the_post_thumbnail(); ?>
					     </a>
					 <?php endif; ?>

					 <div class="post-meta">
						 <?php the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
						 <p class="small"><?php the_date(); ?> | Categories: <?php the_category( ', ' ); ?></p>
						 <div class="post-separator"></div>
						 <?php the_excerpt(); ?>
						 <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
					 </div><!-- post-meta -->
				 </div><!-- post-wrapper -->
			 </div><!-- col -->

		 			<?php endwhile;

					the_posts_navigation();

					endif;  ?>

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
