<?php
/*
Template Name: Speaking
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">

				<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>	
									    					
		    <div class="large-12 medium-12 columns">
										
			    <?php
						if (have_posts()) :
						   while (have_posts()) :
						      the_post();
						         the_content();
						   endwhile;
						endif;		    
				  ?>  					
			    					
			</div> <!-- end #main -->	
			<hr>
			<div class="large-6 medium-6 columns past-events">
				<h3>Selection of Past Events</h3>
				<ul class="tabs" data-tabs id="example-tabs">
					<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Keynotes</a></li>
					<li class="tabs-title"><a href="#panel2">Campus Retreats</a></li>
					<li class="tabs-title"><a href="#panel3">High schools</a></li>						
				</ul>
				<div class="tabs-content" data-tabs-content="example-tabs">
					<div class="tabs-panel is-active" id="panel1">
						<p><?php echo get_field('list_of_past_keynotes'); ?></p>
					</div>
					<div class="tabs-panel" id="panel2">
						<p><?php echo get_field('list_of_past_high_schools'); ?></p>
					</div>
					<div class="tabs-panel" id="panel3">
						<p><?php echo get_field('list_of_past_campus_retreats'); ?></p>
					</div>					
				</div>
			</div>
				
			<div class="large-6 medium-6 columns upcoming-events">Upcoming Events</div>
		  
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>