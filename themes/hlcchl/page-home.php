<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HLCCHL
 */

get_header(); ?>

<!-- HERO BANNER WITH CTA
================================================== -->
<div class="jumbotron" id="hero">
  <div class="container">
    <h2>By the community for the community</h2>
    <h3> The Holly Lodge Community Centre offers a whole range of activities in a friendly, relaxed environment. We also offer space to hire for events.</h3>
    <div class="button-group">
      <button type="button" class="btn btn-default btn1">What's On</button>
      <button type="button" class="btn btn-default btn2">Donate</button>
    </div><!-- button-group -->
  </div><!-- container -->
</div><!-- jumbo -->

<!-- BANNER WITH LATEST NEWS
================================================== -->
<div class="jumbotron" id="latest">
  <div class="container">
    <div class="latest-top">
      <h3>LATEST ANNOUNCEMENTS:</h3>
      <p>The Holly Lodge Community Centre has had a makeover !</p>
    </div>
    <div class="latest-bottom">
      <p>Join us for The Monday Lunch at Holly Lodge Community Centre.<br />
       Doors open at noon, lunch served at 12:30.</p>
    </div>
  </div><!-- container -->
</div><!-- jumbo -->

<!-- HOMEPAGE WIDGETS
================================================== -->
<section id="hp-widgets">
  <div class="container">
    <div class="row">

      <!-- 1st column
      ================================================== -->
      <div class="col-md-4">
        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/placeholder.jpg" alt="image placeholder"></a>
        <h3>Activities</h3>
        <p>Come participate in one of our many activities! Among our current class offerings you’ll find Judo, yoga, and art. Attend WI and other local meetings, as well as a variety of other events. Have a look at our calendar to find out what’s on, and when.</p>
        <div class="btn-case">
          <button type="button" class="btn btn-default">What's On</button>
        </div><!-- btn-case -->
      </div><!-- col -->

      <!-- 2nd column
      ================================================== -->
      <div class="col-md-4">
        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/placeholder.jpg" alt="image placeholder"></a>
        <h3>Volunteer</h3>
        <p>Enjoy volunteering, or want to give it a go? Have a skill set you want to share, or just want to help out? We always need motivated volunteers. Get in touch via our Support Us page.</p>
        <div class="btn-case">
          <button type="button" class="btn btn-default">Support</button>
        </div><!-- btn-case -->
      </div><!-- col -->

      <!-- 3rd column
      ================================================== -->
      <div class="col-md-4">
        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/placeholder.jpg" alt="image placeholder"></a>
        <h3>Hall Hire</h3>
        <p>We have an attractive, newly refurbished space for hire, with a commercial style kitchen and a lovely terrace. If you would like to hold lectures, classes, workshops, seminars, meetings, parties, or other events, do get in touch.</p>
        <div class="btn-case">
          <button type="button" class="btn btn-default">Hall Hire</button>
        </div><!-- btn-case -->
      </div><!-- col -->

    </div><!-- row -->
  </div><!-- container -->
</section>

<?php
get_footer();
