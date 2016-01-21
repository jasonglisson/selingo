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
		
		<div class="signup-form-section">
			<div class="row">
		  	<?php selingo_subscribe_form(); ?>
			</div>
		</div>    
		
		<div class="book-carousel-section">
			<?php book_carousel(); ?>
		</div>	

		<div class="about-jeff-section">
			<div class="row">
				<?php about_jeff(); ?>
			</div>	
		</div>	
		
	</div> <!-- end #content -->

<?php get_footer(); ?>