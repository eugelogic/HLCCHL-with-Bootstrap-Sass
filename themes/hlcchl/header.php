<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HLCCHL
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hlcchl' ); ?></a>

	<!-- HEADER
	================================================== -->
	<header id="masthead" class="site-header" role="banner">

		<!-- TOP BAR
    ================================================== -->
    <section id="top-bar">
      <div class="container">
				Call Us on
				<a href="tel:02083429524">0208 342 9524</a>
        -
        Send Us an Email <a href="mailto:hollylodgelondon@hotmail.com">hollylodgelondon@hotmail.com</a>
      </div><!-- container -->
    </section>

    <!-- SITE TITLE
    ================================================== -->
    <section id="site-title">
      <div class="container">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      </div><!-- container -->
    </section>

    <!-- MAIN NAV MENU
    ================================================== -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<button class="menu-toggle" aria-controls="header-menu" aria-expanded="false"><?php esc_html_e( '&#926; Menu', 'hlcchl' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'menu_id' => 'header-menu',
				) );
				?>
			</div><!-- container -->
		</nav><!-- #site-navigation -->

		<?php if ( ! is_front_page() ) : ?>
		 <!-- PAGE TITLE BAR
	   ================================================== -->
	   <div class="jumbotron" id="page-title-bar">
	     <div class="container">
	       <h1><?php the_title( '' ); ?></h1>
	     </div><!-- container -->
	   </div><!-- jumbo -->
		<?php endif;?>

  </header>
