<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
				<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>	
									    					
		    <main id="main" class="large-12 medium-12 columns" role="main">
										
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

<?php get_footer(); ?>