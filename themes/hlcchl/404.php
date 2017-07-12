<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package HLCCHL
 */

get_header(); ?>

<!-- 404 PAGE
================================================== -->
<div id="primary" class="not-found">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'hlcchl' ); ?></h1>
				</header><!-- .page-header -->

				<p><?php esc_html_e( 'It looks like nothing was found at this location. Use the main menu above or the search bar on the side.', 'hlcchl' ); ?></p>

			</div><!-- col -->
			<div class="col-md-4 not-found-form">

				<?php
				get_search_form();
				?>

			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</div><!-- #primary -->

<?php
get_footer();
