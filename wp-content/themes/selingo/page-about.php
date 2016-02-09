<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">

				<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>		
	
				<div class="large-2 medium-2 columns">
					<div class="about-jeff-photo"><img src="<?php echo get_field('jeffs_profile_image'); ?>"/></div><br>
					<div class="about-jeff-file"><a href="<?php echo get_field('jeffs_profile_file'); ?>" target="_blank"><i class="fa fa-file-text-o"></i> Jeff's Biography</a></div>
					<div class="about-jeff-contact"><a href="/contact"><i class="fa fa-at"></i> Contact Jeff</a></div>
				</div>
		    <main id="main" class="large-10 medium-10 columns" role="main">
										
			    <?php
						if (have_posts()) :
						   while (have_posts()) :
						      the_post();
						         the_content();
						   endwhile;
						endif;		    
				  ?>  					
			    					
			</main> <!-- end #main -->

<!-- 		    <?php get_sidebar(); ?> -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	<div class="signup-form-section">
		<div class="row">
	  	<?php selingo_subscribe_form(); ?>
		</div>
	</div> 	

<?php get_footer(); ?>