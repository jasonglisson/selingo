<?php
/*
Template Name: Appearances
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
					<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>	
					
					<div class="top-text"><?php echo get_field('media_appearances_text'); ?></div>					
			    					
			</main> <!-- end #main -->

			<div class="apperances-list">
			<?php
	    $args = array(
	        'post_type' => 'appearance',
	        'posts_per_page' => -1,
	    );
	
	    $post = new WP_Query( $args );
	    
	    print_r($post->posts[1]);
	    
	    $appearance = $post->posts;
	    
	    foreach($appearance as $a): ?>
		   
		  <div class="appearance">
			  <div class="">
			  	<img src="">
			  </div>	
		  	<div class="media-img">
			    <h3><?php echo $a->post_title; ?></h3>
			    <span><?php echo get_field('media_description', $a->ID); ?></span>
		  	</div>
		  </div> 
		    
	    <?php endforeach; ?>
	    
			</div>	
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>