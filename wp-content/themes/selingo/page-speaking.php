<?php
/*
Template Name: Speaking
*/
?>

<?php get_header(); ?>
	
	<div id="content">
		<div id="inner-content" class="row">
		
			<h1 class="page-title"><span><?php echo the_title(); ?></span></h1>	
						    					
		</div>
		<div class="speak-top-wrap">
			<div class="row">
					<div class="large-6 columns">.</div>					    					
			    <div class="large-6 medium-12 columns">
											
				    <?php
							if (have_posts()) :
							   while (have_posts()) :
							      the_post();
							         the_content();
							   endwhile;
							endif;		    
					  ?>  					
				    					
				</div> <!-- end #main -->	
			</div>
		</div>
		<div class="row">			    					
		    <div class="large-12 medium-12 columns bottom-body">
										
			    <?php
						echo get_field('additional_body_field');
				  ?>  					
			    					
			</div> <!-- end #main -->	
		</div>				
		<div class="row">	
			<div class="large-12 medium-12 columns upcoming-events">
				<h3 class="upcoming-title">Upcoming Events</h3>
				<div class="events-list">
					
					<?php if( have_rows('upcoming_events') ): ?>
					
						<?php while( have_rows('upcoming_events') ): the_row(); 
					
							// vars
							$event_month = get_sub_field('event_month');
							$event_info = get_sub_field('event_info');
					
							?>
					
								<?php if( $event_month ): ?>
									<strong><?php echo $event_month; ?></strong>
								<?php endif; ?>
										
									<?php if( have_rows('event_info') ): ?>
									
										<ul class="events">
									
											<?php while( have_rows('event_info') ): the_row(); ?>
											
												<?php echo get_sub_field('event'); ?>
												
											<?php endwhile; ?>
									
										</ul>
									
									<?php endif; ?>																
					
						<?php endwhile; ?>
					
					<?php endif; ?>					
					
					<span class="not-open"><strong>*Company or organization event not open to the public.</strong></span>
				</div>	
			</div>			
			<div class="large-12 medium-12 columns past-events">
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
		  
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>