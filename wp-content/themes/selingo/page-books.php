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
						if (have_posts()) :
						   while (have_posts()) :
						      the_post();
						         the_content();
						   endwhile;
						endif;		    
				  ?>
			    					
			</main> <!-- end #main -->
			<div class="book-carousel-section">
				<?php book_carousel(); ?>
			</div>				

<!-- 		    <?php get_sidebar(); ?> -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>