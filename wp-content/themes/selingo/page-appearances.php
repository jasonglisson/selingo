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
	    //print_r($post->posts);
	    $appearance = $post->posts;
	    
	    foreach($appearance as $a): ?>
		   
		  <div class="appearance">
			  <div class="media-img">
			  	<?php $img = get_field('media_icon', $a->ID); ?>
			  	<a href="<?php echo get_field('media_link', $a->ID);?>" target="_blank"><img src="<?php echo $img['sizes']['thumbnail']; ?>"></a>
			  </div>	
		  	<div class="media-text">
			    <a href="<?php echo get_field('media_link', $a->ID);?>" target="_blank"><h3><?php echo $a->post_title; ?></h3></a>
			    <div class="media-date"><?php echo mysql2date('F j, Y', $a->post_date); ?></div>
			    <span><?php echo get_field('media_description', $a->ID); ?></span>
		  	</div>
		  </div> 
		    
	    <?php endforeach; ?>
	    
			</div>	
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>