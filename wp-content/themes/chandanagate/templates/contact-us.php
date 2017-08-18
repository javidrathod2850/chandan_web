<?php

/**

Template Name: Contact Us

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage Chandan Agate

 * @since Chandan Agate
 */
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="content">
  <!--contact-->
    <div class="mail-w3ls">
      <div class="container">
        <h2 class="tittle">Mail Us</h2>
        <div class="mail-grids">
          <div class="mail-top">
            <div class="col-md-4 mail-grid">
              <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
              <h5>Address</h5>
              <p><?php echo ot_get_option('address'); ?></p>
            </div>
            <div class="col-md-4 mail-grid">
              <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
              <h5>Phone</h5>
              <p>Telephone:  <?php echo ot_get_option('contact_number'); ?></p>
            </div>
            <div class="col-md-4 mail-grid">
              <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
              <h5>E-mail</h5>
              <p>E-mail:<a href="mailto:<?php echo ot_get_option('email'); ?>"> <?php echo ot_get_option('email'); ?></a></p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="map-w3">
            <?php the_field('map_iframe'); ?>
          </div>
          <div class="mail-bottom">
            <h4>Get In Touch With Us</h4>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  <!--contact-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
