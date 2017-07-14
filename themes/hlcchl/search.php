<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package HLCCHL
 */

get_header(); ?>

<!-- SEARCH RESULTS INDEX PAGE
================================================== -->
<section id="search-tml">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				/* translators: %s: search term */
				<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'hlcchl' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

				<div class="row">

		<!-- Start the Loop -->
		<?php while ( have_posts() ) : the_post(); ?>

		 <!-- SEARCH RESULTS GRID
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

			else :

				get_template_part( 'template-parts/content', 'none' );

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
