<?php

/**

Template Name: Main Categories

 * The template for displaying all Categories
*/
get_header();
?>
<?php
$parent_id= (isset($_GET['parent']))?$_GET['parent']:0;
$taxonomy = 'product_category';
$args = array(
    'parent' => $parent_id
);
$categories = get_terms($taxonomy,$args);
$pageTitle = ($parent_id == 0)?"Categories":get_term_by('id', $parent_id, $taxonomy)->name;
?>
<div class="latest-w3">
	<div class="container">
		<h3 class="tittle1"><?php echo $pageTitle; ?></h3>
    <div class="latest-grids category-page">
      <?php
      foreach($categories as $category){ ?>
        <div class="col-md-4 latest-grid">
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
          <a href="<?php echo $categoryLink; ?>" >
            <div class="latest-top">
              <img height="100" alt="" class="img-responsive" src="<?php echo get_field("category_image",$taxonomy . '_' .$category->term_id); ?>">
              <div class="latest-text">
                <h4><?php echo $category->name; ?></h4>
              </div>
            </div>
          </a>
        </div>
      <?php
        }
      ?>
    </div>
	</div>
</div>
<?php get_footer(); ?>
