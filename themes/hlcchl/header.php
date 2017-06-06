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
	<header class="site-header" role="banner">

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
        <h1>Holly Lodge Community Centre - Highgate London</h1>
      </div><!-- container -->
    </section>

    <!-- MAIN NAV MENU
    ================================================== -->
    <nav>
      <div class="container">
      	<ul>
          <li><a href="/" class="is-checked">Home</a></li>
          <li><a href="/whats-on/">What's On</a></li>
          <li><a href="/news/">News</a></li>
          <li><a href="/community-centre-hall-hire/">Hall Hire</a></li>
          <li><a href="/nursery/">Nursery</a></li>
          <li><a href="/contact-us/">Contact Us</a></li>
          <li><a href="/support-us/">Support Us</a></li>
        </ul>
      </div><!-- container -->
    </nav>

		<?php if (! is_front_page()) : ?>
		 <!-- PAGE TITLE BAR
	   ================================================== -->
	   <div class="jumbotron" id="page-title-bar">
	     <div class="container">
	       <h1><?php the_title(); ?></h1>
	     </div><!-- container -->
	   </div><!-- jumbo -->
		<?php endif;?>

  </header>
