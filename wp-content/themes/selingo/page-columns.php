<?php
/*
Template Name: Columns
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
					<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>						
			  
			  </main> <!-- end #main -->	
			  		
					<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
					$the_query = new WP_Query( $args );?>			
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>		
							<?php $the_id = get_the_id(); ?>		
						  <div class="column-post">
							  <div class="column-img">
							  	<?php $img = get_field('column_icon'); 
								  	if(!empty($img)): ?>
											<a href="<?php echo get_field('column_link');?>" target="_blank"><img src="<?php echo $img['sizes']['thumbnail']; ?>"></a>
										<?php else: ?>
											<a href="<?php echo get_field('column_link');?>" target="_blank"><img height="150" width="150" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/js.jpg" ?></a>
										<?php endif; ?>	
							  </div>	
						  	<div class="column-text">
									<h4><a href="<?php echo get_field('column_link');?>" target="_blank"><?php echo the_title(); ?></a></h4>
									<div class="column-post-date"><?php echo get_the_date('l, F jS, Y'); ?></div>
									<div class="column-text"><?php echo get_blog_excerpt(); ?><a href="<?php echo get_field('column_link');?>" target="_blank">Read More</a></div>
						  	</div>
						  </div>							
							
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>			
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	<div class="signup-form-section">
		<div class="row">
	  	<?php selingo_subscribe_form(); ?>
		</div>
	</div>    
	<div class="about-jeff-section">
		<div class="row">
			<?php about_jeff(); ?>
		</div>	
	</div>		
<?php get_footer(); ?>