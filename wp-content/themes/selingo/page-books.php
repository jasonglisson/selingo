<?php
/*
Template Name: Books
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
					<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>					
					
					<?php 
						
						$post_objects = get_field('featured_book');
						if( $post_objects ): 
					
					    	$postID = $post_objects->ID; ?>				
								<div class="row">
									<div class="large-1 show-for-large columns">&nbsp;</div>
									<div class="large-3 medium-3 small-12 columns book-promo-img">
										<img src="<?php echo get_field('book_image', $post_objects->ID); ?>"/>
									</div>
									<div class="large-7 medium-7 small-12 columns book-promo-info">
										<h4>Featured Book</h4>
										<h2><?php echo get_the_title($post_objects->ID); ?></h2>
										<?php if(!empty(get_field('book_subtitle', $post_objects->ID))) : ?>
											<h5><?php echo get_field('book_subtitle', $post_objects->ID); ?></h5>
										<?php endif; ?>
										<?php if(!empty(get_field('brief_book_summary', $post_objects->ID))) : ?>				
											<p><?php echo get_field('brief_book_summary', $post_objects->ID); ?></p>	
										<?php endif; ?>	
										<a href="<?php echo get_permalink($post_objects->ID); ?>"><button class="secondary hollow button">About This Book</button></a>	
										<button class="button feature-purchase-book" type="button" data-toggle="purchase-dropdown-1">Purchase This Book<i class="fa fa-caret-down"></i></button>
										<div class="dropdown-pane purchase-options" id="purchase-dropdown-1" data-dropdown data-hover="false">
											<?php if( have_rows('buy_links', $post_objects->ID)) : ?>
													<?php	while( have_rows('buy_links', $post_objects->ID) ): the_row(); ?>
																<a href="<?php the_sub_field('purchase_book_link');?>" class="book-purchase" target="_blank"><?php the_sub_field('purchase_book_site');?></a>
												<?php endwhile; ?>
											<?php	endif; ?>										
										</div>
										<div class="book-blurb-section">
											<?php if( have_rows('book_blurbs')) : ?>
													<ul class="book-blurb-carousel">
													<?php	while( have_rows('book_blurbs') ): the_row(); ?>
														<li>
															<div class="book-blurb">
																<div class="blurb-text"><?php the_sub_field('book_blurb_text');?></div>
																<div class="blurb-author">-- <?php the_sub_field('book_blurb_author');?></div>
															</div>	
														</li>		
												<?php endwhile; ?>
													</ul>
													<div class="blurb-controls"><i class="fa fa-caret-left blurb-left"></i><i class="fa fa-caret-right blurb-right"></i></div>
											<?php	endif; ?>						
										</div>	
									</div>	
									<div class="large-1 show-for-large columns">&nbsp;</div>
								</div>														
					<?php endif; ?>	
<!--
			    <?php
						if (have_posts()) :
						   while (have_posts()) :
						      the_post();
						         the_content();
						   endwhile;
						endif;		    
				  ?>
-->
			    					
			</main> <!-- end #main -->			

<!-- 		    <?php get_sidebar(); ?> -->
		    
		</div> <!-- end #inner-content -->

		<div class="all-books-section">
			<h4 class="page-title"><span>Books by Jeff Selingo</span></h4>					
			<div class="book-carousel-section">
				<?php book_carousel(); ?>
			</div>			
		</div>	

	</div> <!-- end #content -->

<?php get_footer(); ?>