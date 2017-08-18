<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Chandan Agate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Chandan Agate" />
<!--css-->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-submenu.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.css" type="text/css" media="screen" />
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap-3.1.1.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/responsiveslides.min.js"></script>
<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexslider.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/imagezoom.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script>
  // Can also be used with $(document).ready()
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });
  });
</script>
</head>
<body>
  <!--header-->
    <div class="header">
      <div class="header-top">
        <div class="container">
           <div class="top-left">
            <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> 
            	<?php echo ot_get_option('contact_number'); ?>
            </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="heder-bottom">
        <div class="container">
          <div class="logo-nav">
            <div class="logo-nav-left">
              <h1><a href="<?php echo get_home_url(); ?>">CHANDAN <span>Agate</span></a></h1>
            </div>
            <div class="logo-nav-left1">
              <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> 
              <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
              	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav' , 'walker' => new WP_Bootstrap_Navwalker ) ); ?>
              </div>
              </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!--header-->