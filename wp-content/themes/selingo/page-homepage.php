<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
<!--
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->
		
		<div class="signup-form-section">
			<div class="row">
		  	<?php selingo_subscribe_form(); ?>
			</div>
		</div>    
		
		<div class="book-carousel-section">
			<div class="row">
				<?php book_carousel(); ?>
			</div>	
		</div>	

		<div class="about-jeff-section">
			<div class="row">
				<?php about_jeff(); ?>
			</div>	
		</div>	
		
	</div> <!-- end #content -->

<?php get_footer(); ?>