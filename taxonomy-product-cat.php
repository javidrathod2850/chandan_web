<?php get_header(); ?>
 <!-- content -->
      <section class="contain">
      	<div class="left_banner_in_all_page"><img src="<?php echo get_template_directory_uri(); ?>/images/water_mark_img.png"></div>
        <div class="container"> 
        	<h1 class="title mar0"><?php if( is_tax() ) {
				global $wp_query;
				$term = $wp_query->get_queried_object();
				 
				$parents_terms = get_term_by('slug','promotional-products','product-cat');
				
			   	echo $title = $term->name; }  ?>
            </h1>
            <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
              	<div class="product_container">
                <div class="row">
                 	<?php $pro_item=1; query_posts($query_string . '&order=ASC'); if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                	<div class="col-sm-3 col-md-3 col-xs-12 col-lg-3">
                    	<div class="pro_block">                        	
                        	<?php
                        		if ( has_post_thumbnail()) {
                        		
                        		 	if($parents_terms->term_id != $term->parent){
	                        			echo "<a href='".get_permalink()."'>";
	                        		}else{
	                        			echo "<a href='".ot_get_option('promotional_products_site')."' target='_blank'>";
	                        		}
                        		?>	                        	
	                        		<?php echo get_the_post_thumbnail($post_id, 'full');?>
	                        	</a>
                        	<?php }else{?>
                            <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png " alt=""/> <?php } ?>
                            <div class="pro_content background_<?php echo $pro_item; ?>" >
                            		<?php if($parents_terms->term_id != $term->parent){ ?>
                                		<div class="min230">
		                                    <h4><?php the_title(); ?></h4>
		                                    
		                                    <p><?php $excerpt = get_the_excerpt();
												echo substr($excerpt, 0, 182).'....'; ?></p>
		                                </div>
		                                <a href="<?php echo get_permalink(); ?>">Details</a>    
                                    <?php }else{ ?>
                                    	<div class="min80">
		                                    <h4><?php the_title(); ?></h4>	                                    
		                                    
		                                </div>
		                                <a target='_blank' href="<?php echo ot_get_option('promotional_products_site'); ?>" style="font-size: 12px;">
		                                <?php echo ot_get_option('promotional_products_content');?>
		                                </a>
                                    <?php } ?>
                                
                            </div>
                    	</div>
                    </div><?php if($pro_item == 8){ $pro_item = 0;} $pro_item++; ?>
                    <?php endwhile; ?>
    				<?php endif; ?>    
                </div>
           	</div>  
           	<?php 
           	$secu_cats = get_term_by('slug', get_query_var('product-cat'), 'product-cat');   
                 	
           	if($secu_cats->parent == 72){ ?>
	           	<div class="row">
	            	<div class="col-lg-12 col-md-12">
	            		<div class="org_div">
	                    <?php the_field('security_banner_text',35);?>
	                </div>                
	            	</div>
	            </div>
	            
	            <div class="row sec_list">
	            <?php 
	            $security_links_column_1=get_field('security_links_column_1',35);
	            $security_links_column_2=get_field('security_links_column_2',35);
	            $security_links_column_3=get_field('security_links_column_3',35);     
	            ?>
	             	<ul class="col-lg-4 col-md-4 col-sm-4">
	             	<?php foreach ($security_links_column_1 as $security_links1):?>
		             		<?php if($security_links1['security_link_text']!=""):?>
		                		<li><a href="<?php if($security_links1['security_text_link']=="" || $security_links1['security_text_link']==" ") {echo "#";}else{ echo $security_links1['security_text_link'];}?>" <?php if($security_links1['security_text_link']=="" || $security_links1['security_text_link']=="#" || $security_links1['security_text_link']==" ") {echo "";}else{?> target="_blank" <?php } ?>>
		                				<?php echo $security_links1['security_link_text'];?>
		                			</a></li>
		                	<?php endif;?>
	                 <?php endforeach;?>
	                </ul>
	                <ul class="col-lg-4 col-md-4 col-sm-4">
	                	<?php foreach ($security_links_column_2 as $security_links2):?>
		                	<?php if($security_links2['security_link_text']!=""):?>
		                		<li><a href="<?php if($security_links2['security_text_link']=="" || $security_links2['security_text_link']==" ") {echo "#";}else{ echo $security_links2['security_text_link'];}?>" <?php if($security_links2['security_text_link']=="" || $security_links2['security_text_link']=="#" || $security_links2['security_text_link']==" ") {echo "";}else{?> target="_blank" <?php } ?>>
		                		<?php echo $security_links2['security_link_text'];?>
		                		</a></li>
		                	<?php endif;?>
	                 <?php endforeach;?>
	                </ul>
	                <ul class="col-lg-4 col-md-4 col-sm-4">
	                	<?php foreach ($security_links_column_3 as $security_links3):?>
		                	<?php if($security_links3['security_link_text']!=""):?>
		                		<li><a href="<?php if($security_links3['security_text_link']=="" || $security_links3['security_text_link']==" ") {echo "#";}else{ echo $security_links3['security_text_link'];}?>" <?php if($security_links3['security_text_link']=="" || $security_links3['security_text_link']=="#" || $security_links3['security_text_link']==" ") {echo "";}else{?> target="_blank" <?php } ?>>
		                		<?php echo $security_links3['security_link_text'];?>
		                		</a></li>
		                	<?php endif;?>
	                 <?php endforeach;?>
	                </ul>                
	            </div>   
            <?php } ?>
            	<?php if($secu_cats->parent == 7){ ?>
            	<?php $caution=get_field('caution','product-cat_'.$secu_cats->term_id);?>
            	<?php $description=nl2br($secu_cats->description);?>
            	<div class="container oem_detail_container">
            	<?php if($description=="" || $description==" "): echo "";else:?>
            		<h2>Description : </h2>
            		<p><?php echo $description;?></p>
            	<?php endif;?>
            	<?php if($caution=="" || $caution==" "): echo "";else:?>
            		<h2>Caution : </h2>
            		<p><?php echo $caution?></p>
            	<?php endif;?>
            	</div>
            	<?php }?>
        </div>
      </section>
      <style type=""text/css>
      	.min80{
      		min-height: 80px;
      	}
      </style>
    <!-- ################################################################################################ -->
   
<?php get_footer(); ?>