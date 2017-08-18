<?php

/**

Template Name: Home Page

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

get_header();

?><!--banner-->
<div class="banner-w3">
  <div class="demo-1">
    <div id="example1" class="core-slider core-slider__carousel example_1">
      <div class="core-slider_viewport">
        <div class="core-slider_list">
          <?php
            $args = array('post_type' => 'slider', 'order' => 'ASC', 'tax_query' => array(
              array(
                'taxonomy' => 'SliderType',
                'field' => 'slug',
                'terms' => 'home-slider'
              )
            ));
            $loop = new WP_Query( $args );
            $loopitem = 0;
            while ( $loop->have_posts() ) : $loop->the_post();
          ?>
            <div class="core-slider_item">
              <img src="<?php echo get_field( "image" ); ?>" class="img-responsive" alt="">
            </div>
          <?php
            endwhile;
            wp_reset_query();
          ?>
         </div>
      </div>
      <div class="core-slider_nav">
        <div class="core-slider_arrow core-slider_arrow__right"></div>
        <div class="core-slider_arrow core-slider_arrow__left"></div>
      </div>
      <div class="core-slider_control-nav"></div>
    </div>
  </div>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/coreSlider.css" rel="stylesheet" type="text/css">
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/coreSlider.js"></script>
  <script>
  $('#example1').coreSlider({
    pauseOnHover: false,
    interval: 3000,
    controlNavEnabled: true
  });
  </script>
</div>
<!--banner-->
<!--content-->
<div class="content">
  <div class="latest-w3">
    <div class="container">
      <h3 class="tittle1"><?php echo get_field('category_title'); ?></h3>
      <div class="latest-grids category_grid">
        <?php
          $parent_id= (isset($_GET['parent']))?$_GET['parent']:0;
          $taxonomy = 'product_category';
          $args = array(
              'parent' => $parent_id
          );
          $categories = get_terms($taxonomy,$args);
          $pageTitle = ($parent_id == 0)?"Categories":get_term_by('id', $parent_id, $taxonomy)->name;
        ?>
        <?php foreach($categories as $category){ ?>
          <?php $childTerms =  get_term_children( $category->term_id, $taxonomy ); ?>
          <?php
            if(!empty($childTerms)){
              $categoryLink = add_query_arg( array(
                'parent' => $category->term_id
              ), get_page_link() );
            }else{
              $categoryLink = get_term_link($category->slug,$taxonomy);
            }
          ?>
          <div class="col-md-4 latest-grid">
            <div class="latest-top">
              <img  src="<?php echo get_field("category_image",$taxonomy . '_' .$category->term_id); ?>" class="img-responsive"  alt="">
              <a href="<?php echo $categoryLink; ?>">
                <div class="latest-text">
                  <h4><?php echo $category->name; ?></h4>
                </div>
              </a>
            </div>
          </div>
        <?php } ?>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
<!--Products-->
  <div class="product-agile">
    <div class="container">
      <h3 class="tittle1"><?php echo get_field('product_title'); ?></h3>
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider">
            <li>
              <div class="caption">
                <?php $count = 1; ?>
                <?php $loop = new WP_Query( array( 'post_type' => 'products', 'posts_per_page' => 8, 'order' => 'DESC' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="<?php echo get_permalink(); ?>">
                            <div class="grid-img">
                              <img  src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="">
                            </div>
                            <?php
          										if( have_rows('other_images') ):
          											while ( have_rows('other_images') ) : the_row();
          									?>
                            <div class="grid-img">
                              <img  src="<?php the_sub_field('images'); ?>" class="img-responsive"  alt="">
                            </div>
                            <?php
          											endwhile;
          										endif;
          									?>
                          </a>
                        </figure>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
                        <a href="<?php echo get_permalink(); ?>" data-text="Details" class="my-cart-b item_add">Details</a>
                      </div>
                    </div>
                  </div>
                  <?php if($count == 4){ ?>
                    </li>
                    <li>
                    <?php $count = 0; ?>
                  <?php } ?>
                  <?php $count++; ?>
                <?php endwhile; ?>
                <div class="clearfix"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<!--Products-->
</div>
<!--content-->
<?php get_footer(); ?>
