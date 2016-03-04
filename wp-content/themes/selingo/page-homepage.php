<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	
	<div id="content">
		
		<div class="homepage-features">
				<?php homepage_feature(); ?>
		</div>	
		
		<?php book_talks(); ?>					
		
		<div class="about-jeff-section">
			<div class="row">
				<?php about_jeff(); ?>
			</div>	
		</div>	
				
		<div class="signup-form-section">
			<div class="row">
		  	<?php selingo_subscribe_form(); ?>
			</div>
		</div>    
		
		<div class="book-carousel-section">
			<?php book_carousel(); ?>
		</div>	

		<div class="logo-row">
			<?php logo_carousel(); ?>
		</div>	

		<div class="resources-section">
			<?php jeff_resources(); ?>			
		</div>	
		
	</div> <!-- end #content -->

<?php get_footer(); ?>