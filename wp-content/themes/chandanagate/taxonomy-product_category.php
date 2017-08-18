<?php get_header(); ?>
<?php
global $wp_query;
$term = $wp_query->get_queried_object();
?>
<div class="content">
	<div class="products-agileinfo">
		<h2 class="tittle">
			<?php $parents_terms = get_term_by('slug','product_category');echo $title = $term->name; ?>
		</h2>
		<div class="container">
			<div class="product-agileinfo-grids w3l row">
				<div class="col-xs-12 product-agileinfon-grid1">
					<div data-example-id="togglable-tabs" role="tabpanel" class="bs-example bs-example-tabs">
						<div class="tab-content" id="myTabContent">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="product-tab">
									<?php $pro_item=1; query_posts($query_string . '&order=ASC'); 
									if ( have_posts() ): 
										while ( have_posts() ): the_post(); ?>
											<div class="col-md-3 col-xs-12">
												<div class="grid-arr">
													<div class="grid-arrival">
														<figure>
															<a href="<?php echo get_permalink(); ?>" class="new-gri">
																<?php if ( has_post_thumbnail()) { ?>
																		<div class="grid-img">
																			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="img-responsive" alt="">
																		</div>
																		<div class="grid-img">
																			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="img-responsive" alt="">
																		</div>
																<?php }else{ ?>
																		<div class="grid-img">
																			<img src="images/p6.jpg" class="img-responsive" alt="">
																		</div>
																		<div class="grid-img">
																			<img src="images/p5.jpg" class="img-responsive" alt="">
																		</div>			
																<?php } ?>	
															</a>
														</figure>	
													</div>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
														<!-- <span class="size">XL / XXL / S </span>
														<p><del>$100.00</del><em class="item_price">$70.00</em></p> -->
														<a href="<?php echo get_permalink(); ?>" data-text="Add To Cart" class="my-cart-b item_add">Details</a>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
    								<?php endif; ?> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>