<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		if ( is_single() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="small">
			<?php hlcchl_posted_on(); ?>
			<!-- The following was created in functions.php -->
			<?php hlcchl_post_cats(); ?>
		</div><!-- .small -->
		<?php
		endif; ?>
	</header>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hlcchl' ), array(
					'span' => array(
						'class' => array(),
					),
				) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
	</div><!-- .entry-content -->
	<div class="prev-next"><?php the_post_navigation(); ?></div>
</article><!-- #post-## -->
