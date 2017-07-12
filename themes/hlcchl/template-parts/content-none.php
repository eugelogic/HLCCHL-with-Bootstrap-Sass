<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

?>

<section class="no-results">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'hlcchl' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'hlcchl' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hlcchl' ); ?></p>

					<?php endif; ?>
				</div><!-- .page-content -->
			</div><!-- col-md-8 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- .no-results -->
