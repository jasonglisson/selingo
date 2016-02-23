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
						echo do_shortcode( '[contact-form-7 id="46" title="Contact Jeff"]' );  
				  ?>  					
			  					
			</main> <!-- end #main -->
			<div class="large-6 columns">
				test
			</div>	
<!-- 		    <?php get_sidebar(); ?> -->
		    
		</div> <!-- end #inner-content -->
		<div class="signup-form-section">
			<div class="row">
		  	<?php selingo_subscribe_form(); ?>
			</div>
		</div> 		

	</div> <!-- end #content -->

<?php get_footer(); ?>