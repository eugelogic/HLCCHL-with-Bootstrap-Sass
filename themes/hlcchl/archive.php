<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

 get_header(); ?>

 <!-- NEWS INDEX PAGE
 ================================================== -->
 <?php if ( have_posts() ) : ?>

 <section id="archive-tml">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-8">

				<header class="page-header">
					<?php
						the_archive_title( '<h2 class="page-title">', '</h2>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

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
