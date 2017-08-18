<?php get_header(); ?>
<div class="content">
	<!--single-->
	<div class="single-wl3">
		<div class="container">
			<div class="single-grids">
				<div class="col-md-12 single-grid">
					<div clas="single-top">
						<div class="single-left">
							<div class="flexslider">
								<ul class="slides">
									<?php 
									if ( has_post_thumbnail()) { 
									?>
										<li data-thumb="<?php echo get_the_post_thumbnail_url(); ?>">
											<div class="thumb-image"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" data-imagezoom="true" class="img-responsive"> </div>
										</li>
									<?php 
										}else{
									?>
										<li data-thumb="<?php echo get_the_post_thumbnail_url('full'); ?>">
											<div class="thumb-image">
												<img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" data-imagezoom="true" class="img-responsive"> 
											</div>
										</li>
									<?php } ?>
									<?php
										if( have_rows('other_images') ):
											while ( have_rows('other_images') ) : the_row();
									?>
												<li data-thumb="<?php the_sub_field('images'); ?>">
													<div class="thumb-image">
														<img src="<?php the_sub_field('images'); ?>" data-imagezoom="true" class="img-responsive"> 
													</div>
												</li>
									<?php
											endwhile;
										endif;
									?>
								</ul>
							</div>
						</div>
						<?php if ( have_posts() ) {
								while ( have_posts() ) { the_post();  ?>
									<div class="single-right simpleCart_shelfItem">
										<h4><?php echo get_the_title(); ?></h4>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<p><span class="size">Type: </span> <?php the_field('type'); ?>s </p>
											<p><span class="size">Shape: </span> <?php the_field('shape'); ?>s </p>
											<p><span class="size">Unit: </span> <?php the_field('unit'); ?>s </p>
											<p><span class="size">Size: </span> <?php the_field('size'); ?>s </p>
											<p><span class="size">Weight: </span> <?php the_field('weight'); ?>s </p>
											<p><span class="size">Color: </span> <?php the_field('color'); ?>s </p>
											<p><span class="size">Clarity: </span> <?php the_field('clarity'); ?>s </p>
										</div>
										<div class="description">
											<p><span>Product Description : </span> <?php echo get_the_content(); ?></p>
										</div>
										<div class="women">
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
						<?php	
								} 
							} ?>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
</div>   
<?php get_footer(); ?>