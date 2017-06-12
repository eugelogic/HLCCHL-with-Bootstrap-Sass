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
<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/img/favicon.ico">

<title>
	<?php wp_title('|', true , 'right'); ?>
	<?php bloginfo('name'); ?>
</title>

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
        <?php the_field('phone_blurb'); ?>
        <a href="tel:<?php the_field('phone_number_wns'); ?>"><?php the_field('phone_number'); ?></a>
        -
        <?php the_field('email_blurb'); ?> <a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a>
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
				<button class="menu-toggle" aria-controls="header-menu" aria-expanded="false"><?php esc_html_e( 'Ξ Menu', 'hlcchl' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'menu_id' => 'header-menu'
				) );
				?>
			</div><!-- container -->
		</nav><!-- #site-navigation -->

		<?php if (! is_front_page()) : ?>
		 <!-- PAGE TITLE BAR
	   ================================================== -->
	   <div class="jumbotron" id="page-title-bar">
	     <div class="container">
	       <h1><?php wp_title(''); ?></h1>
	     </div><!-- container -->
	   </div><!-- jumbo -->
		<?php endif;?>

  </header>
