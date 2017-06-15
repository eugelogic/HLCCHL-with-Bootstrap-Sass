<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package Underscores.me
 *
 * @since Underscores.me 1.0
 */

?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text">
      <span class="screen-reader-text">Search for:</span>
    </label>
		<input type="search" class="search-field" name="s" id="s" placeholder="<?php esc_attr_e( 'Enter search term &hellip;', 'hlcchl' ); ?>" value="" />
		<input type="submit" class="search-submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'hlcchl' ); ?>" />
	</form>
