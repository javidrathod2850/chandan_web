<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!--- footer - -->
    <div class="footer-w3l">
      <div class="container">
        <div class="footer-grids">
          <div class="col-md-6 footer-grid">
            <?php
            	$args = array('post_type' => 'page', 'name' => 'about-us', 'order' => 'ASC');
	            $loop = new WP_Query( $args );
	            $loopitem = 0;
	            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            	<h4><?php echo get_the_title(); ?></h4>
          		<?php echo get_field( "footer_content" ); ?>
          	<?php
            	endwhile;
            	wp_reset_query();
          	?>
            <div class="social-icon">
              <a href="<?php echo ot_get_option('facebook_link'); ?>"><i class="icon"></i></a>
              <a href="<?php echo ot_get_option('twitter_link'); ?>"><i class="icon1"></i></a>
              <a href="<?php echo ot_get_option('google_plus_link'); ?>"><i class="icon2"></i></a>
              <a href="<?php echo ot_get_option('linkedin_link'); ?>"><i class="icon3"></i></a>
            </div>
          </div>
          <div class="col-md-3 footer-grid">
            <?php if ( is_active_sidebar( 'footer_menu' ) ) : ?>
                <?php dynamic_sidebar( 'footer_menu' ); ?>
            <?php endif; ?>
          </div>
          <div class="col-md-3 footer-grid foot">
            <h4>Contacts</h4>
            <ul>
              <li>
              	<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
              	<a href="javascript:void(0);"><?php echo ot_get_option('address'); ?></a>
              </li>
              <li>
              	<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
              	<a href="javascript:void(0);"><?php echo ot_get_option('contact_number'); ?></a>
			        </li>
              <li>
              	<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
              	<a href="mailto:<?php echo ot_get_option('email'); ?>"><?php echo ot_get_option('email'); ?></a>
              </li>
            </ul>
          </div>
        <div class="clearfix"> </div>
        </div>   
      </div>
    </div>
    <!---footer--->
    <!--copy-->
    <div class="copy-section">
      <div class="container">
        <div class="copy-left">
          <p><?php echo ot_get_option('copyright'); ?> | Design by: <a target="_blank" href="http://www.rayzsoftwares.com/">Rayz Softwares</a></p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <!--copy-->
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <script>
      //$('.dropdown-submenu > a').submenupicker();
      $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        // Avoid following the href location when clicking
        event.preventDefault();
        // Avoid having the menu to close when clicking
        event.stopPropagation();
        // If a menu is already open we close it
        $('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
        // opening the one you clicked on
        $(this).parent().addClass('open');
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>