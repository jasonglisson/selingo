<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
				<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>	
									    					
		    <main id="main" class="large-6 columns" role="main">
										
			    <?php
						if (have_posts()) :
						   while (have_posts()) :
						      the_post();
						         the_content();
						   endwhile;
						endif;		    
				  ?>  	
				<div class="contact-social">	  				
					<?php if( have_rows('social_media_links' ,'option') ): ?>
						<?php while( have_rows('social_media_links' ,'option') ): the_row(); 
							$social_link = get_sub_field('social_link' ,'option');
							$social_icon = get_sub_field('social_icon' ,'option');
							?>
							<?php// if($social_link && $social_icon): ?>
								<a href="<?php echo $social_link; ?>" target="_blank" class="footer-social"><?php echo $social_icon; ?></a>
							<?php //endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>		
				</div>		  					
			</main> <!-- end #main -->
			<div class="large-6 columns">
				<?php echo do_shortcode( '[contact-form-7 id="46" title="Contact Jeff"]' ); ?>
			</div>	
		    
		</div> <!-- end #inner-content -->
		<div class="signup-form-section">
			<div class="row">
		  	<?php selingo_subscribe_form(); ?>
			</div>
		</div> 		

	</div> <!-- end #content -->

<?php get_footer(); ?>