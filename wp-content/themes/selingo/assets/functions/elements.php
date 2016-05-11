<?php

// Feature area that is switchable 
function homepage_feature() {
	wp_reset_postdata();	
	if (get_field('homepage_feature') == 'book') { ?>	
<?php	if( have_rows('book') ): 
			while( have_rows('book') ): the_row(); 	 
				$bookTitleTop = get_sub_field('featured_book_title');
				$bookTitleBottom = get_sub_field('featured_book_title_second_line');
				$bookSubtitle = get_sub_field('featured_book_subtitle');
				$bookDesctext = get_sub_field('featured_book_text');
				$bookBG = get_sub_field('book_background_image');				
				$bookImg = get_sub_field('featured_book_image');	
				$bookbuttontext = get_sub_field('order_button_text');
				$booklink = get_sub_field('about_book_url'); 
				$bookURL = get_sub_field('event_link_target');			
				$bookOverlayColor = get_sub_field('book_background_overlay');
				$bookOrderlinks = get_field('order_links');
				$bookblurbs = get_field('book_blurbs');
				$bookblurbtxt = get_sub_field('book_blurb_text'); 
				$bookblurbauth = get_sub_field('book_blurb_author');				
			?>
		<div class="book-bg-image" style="background-image:url(<?php echo $bookBG ?>);"></div>
		<?php if(!empty($bookOverlayColor)) : ?>
			<div class="overlay" style="background:<?php echo $bookOverlayColor; ?>;"></div>			
		<?php else : ?>
			<div class="overlay" style="background:#666666;"></div>
		<?php endif; ?>					
		<div class="row">
			<div class="large-1 show-for-large columns">&nbsp;</div>
			<div class="large-3 medium-3 small-12 columns book-promo-img">
				<a href="<?php echo $booklink; ?>"><img src="<?php echo $bookImg; ?>"/></a>
			</div>
			<div class="large-7 medium-7 small-12 columns book-promo-info">
				<h2><?php echo $bookTitleTop; ?></h2>
				<?php if(!empty($bookTitleBottom)) : ?>
					<h2><?php echo $bookTitleBottom; ?></h2>
				<?php endif; ?>	
				<?php if(!empty($bookSubtitle)) : ?>
					<h5><?php echo $bookSubtitle; ?></h5>
				<?php endif; ?>
				<?php if(!empty($bookDesctext)) : ?>				
					<p><?php echo $bookDesctext; ?></p>	
				<?php endif; ?>	
				<?php if(!empty($booklink)) :?>
					<a href="<?php echo $booklink; ?>"><button class="secondary hollow button">About This Book</button></a>
				<?php endif; ?> 	
				<button class="button feature-purchase-book" type="button" data-toggle="purchase-dropdown-1"><?php echo $bookbuttontext; ?><i class="fa fa-caret-down"></i></button>
				<div class="dropdown-pane purchase-options" id="purchase-dropdown-1" data-dropdown data-hover="false">
					<?php if( have_rows('order_links')) : ?>
							<?php	while( have_rows('order_links') ): the_row(); ?>
										<a href="<?php the_sub_field('book_purchase_url');?>" class="book-purchase" target="_blank"><?php the_sub_field('book_purchase_name');?></a>
						<?php endwhile; ?>
					<?php	endif; ?>										
				</div>
				<div class="book-blurb-section">
					<?php if( have_rows('book_blurbs')) : ?>
							<ul class="book-blurb-carousel">
							<?php	while( have_rows('book_blurbs') ): the_row(); ?>
								<li>
									<div class="book-blurb">
										<div class="blurb-text"><?php the_sub_field('book_blurb_text');?></div>
										<div class="blurb-author">-- <?php the_sub_field('book_blurb_author');?></div>
									</div>	
								</li>		
						<?php endwhile; ?>
							</ul>
							<div class="blurb-controls"><i class="fa fa-caret-left blurb-left"></i><i class="fa fa-caret-right blurb-right"></i></div>
					<?php	endif; ?>						
				</div>	
			</div>	
			<div class="large-1 show-for-large columns">&nbsp;</div>
		</div>				
	<?php endwhile; ?>
<?php endif; ?>		
<?php } else if (get_field('homepage_feature') == 'event') { ?>
		<?php if( have_rows('event') ): ?>
			<?php while( have_rows('event') ): the_row(); 
				$eventHeading = get_sub_field('event_title'); 
				$eventTitleTop = get_sub_field('event_title_top');
				$eventTitleBottom = get_sub_field('event_title_bottom');
				$eventBG = get_sub_field('event_background_image');				
				$eventforegroundImg = get_sub_field('event_foreground_image');	
				$eventbuttonURL = get_sub_field('event_button_link');
				$eventURLtarget = get_sub_field('event_link_target');
				$eventBGcolor = get_sub_field('');
			?>
			<div class="overlay" style="background:#666;"></div>
			<div class="event-bg-image" style="background-image:url(<?php echo $eventBG; ?>);"></div>
			<div class="row">
				<div class="large-7 medium-12 small-12 columns event-info">
				<?php if(!empty($eventHeading)) : ?>
					<h4><span><?php echo $eventHeading; ?></span></h4>
				<?php endif; ?>	
				<?php if(!empty($eventTitleTop)) : ?>			
					<h2><?php echo $eventTitleTop; ?></h2>
				<?php endif; ?>
				<?php if(!empty($eventTitleBottom)) : ?>				
					<h2><?php echo $eventTitleBottom; ?></h2>
				<?php endif; ?>	
				<div class="event-location">
					<div class="event-date event-location-info">August 16 2015</div>
					<div class="event-place event-location-info">Soandso University</div>
					<div class="event-time event-location-info">7pm</div>
				</div>
				<?php if(!empty($eventbuttonURL)) :
					if( is_array($eventURLtarget) && in_array('yes', $eventURLtarget ) ) {?>
						<a href="<?php echo $eventbuttonURL; ?>" class="button" target="_blank">Read More</a>
					<?php } else { ?>
						<a href="<?php echo $eventbuttonURL; ?>" class="button">Read More</a>					
					<?php } ?>
				<?php endif; ?>	
			</div>
				<div class="large-5 columns show-for-large">
					<?php if(!empty($eventforegroundImg)) :?>
						<img src="<?php echo $eventforegroundImg; ?>" class="foreground-img">
					<?php endif; ?>	
				</div>		
			</div>	
			<?php endwhile; ?>	
		<?php endif; ?>
<?php	} else if (get_field('homepage_feature') == 'booking') { ?>
		<?php if( have_rows('event') ): ?>
			<?php while( have_rows('event') ): the_row(); 
				$eventHeading = get_sub_field('event_title'); 
				$eventTitleTop = get_sub_field('event_title_top');
				$eventTitleBottom = get_sub_field('event_title_bottom');
				$eventBG = get_sub_field('event_background_image');				
				$eventforegroundImg = get_sub_field('event_foreground_image');	
				$eventbuttonURL = get_sub_field('event_button_link');
				$eventURLtarget = get_sub_field('event_link_target');
				$eventBGcolor = get_sub_field('');
			?>
			<div class="overlay" style="background:#666;"></div>
			<div class="event-bg-image" style="background-image:url(<?php echo $eventBG; ?>);"></div>
			<div class="row">
				<div class="large-1 show-for-large columns">&nbsp;</div>					
				<div class="large-7 medium-12 small-12 columns booking-info">
			<?php if(!empty($eventTitleTop)) : ?>			
				<h2>The New School of Thought</h2>
			<?php endif; ?>
			<?php if(!empty($eventTitleBottom)) : ?>				
				<h2>for Higher Education</h2>
			<?php endif; ?>	
			<p>Jeff Selingo is a best-selling author and award-winning columnist who helps parents and higher-education leaders imagine the college and university of the future and how to succeed in a fast-changing economy. </p>
			<a href="/about"><button class="secondary hollow button">About Jeff</button></a>	
			<a href="/contact" class="button">Check Availabilty</a>					
		</div>
				<div class="large-4 columns show-for-large">
					<?php if(!empty($eventforegroundImg)) :?>
						<img src="<?php echo $eventforegroundImg; ?>" class="foreground-img">
					<?php endif; ?>	
				</div>		
			</div>	
			<?php endwhile; ?>	
		<?php endif; ?>
<?php	}
}

// Subscription form for signing up for newsletters	
function selingo_subscribe_form() { ?>
	<h4>Subscribe!</h4>
	<h5>Sign up for my newsletter to receive updates and insights on the college of the future.</h5>
	<?php echo do_shortcode('[mc4wp_form id="895"]');
} 

// Jeff Resources Section
function jeff_resources() { ?>
	<div class="row">
		<div class="large-4 columns resource-col recent-cols">
			<h4>Recent Column</h4>
			<div class="inner-column">
				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1 );
				$the_query = new WP_Query( $args );?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="blog-post-date"><?php echo get_the_date('l, F jS, Y'); ?></div>
					<hr>				
					<h5><span><a href="<?php echo get_field('column_link');?>" target="_blank"><?php the_title(); ?></a></span></h5>
					<div class="blog-text"><?php echo get_blog_excerpt(); ?></div>
					<a href="<?php echo get_permalink(); ?>" class="button hide-for-large">See All Columns</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>	
		</div>
		<div class="large-4 columns resource-col book-speak">
			<h4>Book Jeff to Speak</h4>	
			<div class="inner-column">
				<img src="<?php echo get_field('book_jeff_image'); ?>"/>
				<p><?php echo get_field('book_jeff_text'); ?></p>
				<a href="#" class="button hide-for-large">Book Jeff</a>
			</div>		
		</div>
		<div class="large-4 columns resource-col upcoming-events">
			<h4>Upcoming Appearances</h4>			
			<div class="inner-column">

					<?php if( have_rows('upcoming_events', 9) ): ?>
					
						<?php while( have_rows('upcoming_events', 9) ): the_row(); 
					
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
				
				<a href="/media-appearances" class="button hide-for-large">See Appearances</a>
			</div>
		</div>	
	</div>	
	<div class="row show-for-large">	
		<div class="large-4 columns">
			<a href="/columns" class="button">See All Columns</a>
		</div>			
		<div class="large-4 columns"><a href="/contact" class="button">Book Jeff</a></div>			
		<div class="large-4 columns"><a href="/media-appearances" class="button">See All Appearances</a></div>					
	</div>
<?php }

// Book talks
function book_talks() { ?>
	<?php 
		$event = current_time('Ymd');
		$args = array(
			'post_type' => 'book-talks',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'meta_query' => array(
				array(
					'key' => 'date',
					'compare' => '>=',
					'value' => $event,								
				),
			),
			'meta_key' => 'date',
			'orderby' => 'meta_value title',
			'order' => 'ASC',
		);
	?>							
	<?php $the_query = new WP_Query( $args );?>
		<?php if ( $the_query->have_posts() ) : ?>
			<div class="book-talks-section">
				<div class="swipe"></div>
				<div class="book-talks-right"><i class="fa fa-chevron-circle-right talk-right"></i></div>					
				<div class="row">
					<h3 class="page-title"><span>Book Appearances</span></h3>			
					<ul class="book-talks-slider">							
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li class="large-4 columns book-talk-item">
					<?php $date = get_field('date');
					$date2 = date("F j, Y", strtotime($date)); ?>					
						<div class="book-talk-date"><?php echo $date2;?> / <?php echo get_field('city'); ?></div>
						<hr>					
						<?php if(get_field('description')):?>
							<div class="book-talk-description"><?php echo get_field('description'); ?></div>	
						<?php endif; ?>							
						<?php if(get_field('city')): ?>
							<div class="book-talk-city"><i class="fa fa-map-marker"></i><?php echo get_field('city'); ?></div>	
						<?php endif; ?>	
						<?php if(get_field('location')): ?>
							<div class="book-talk-location"><?php echo get_field('location'); ?></div>	
						<?php endif; ?>																	
						<?php echo edit_post_link(); ?>											
					</li>	
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
					</ul>		
				</div>
				<div class="book-talks-left"><i class="fa fa-chevron-circle-left talk-left"></i></div>								
			</div>						
		<?php endif; ?>	
<?php }

function book_carousel() { ?>
	<div class="books-opaque-right"><i class="fa fa-chevron-circle-right books-right"></i></div>	
	<div class="book-carousel row"> <?php
	wp_reset_postdata();
  $args = array( 'post_type' => 'book', 'posts_per_page' => -1 );
  $loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
    echo '<div class="book-item large-4 medium-4 small-12 columns">';
    	$bookImg = get_field('book_image'); 
			$newBook = get_field('new_book');
			if( is_array($newBook) && in_array('new', $newBook ) ) {
				echo '<div class="new-book">NEW</div>';	
			}	else {
				echo '';
			}
			if (isset($bookImg)) {		
    		echo '<div class="book-img"><a href="' . get_permalink() .'"><img src="' . $bookImg .'"></a><a href="' . get_permalink() . '" class="button">Learn More</a></div>';				
			}		
    	//echo '<div class="book-title"><a href="' . get_permalink() .'">' . get_field('full_book_title') . '</a></div>';    
    	//echo '<a href="' . get_permalink() . '" class="button">Learn More</a>';
    ?>
    <div class="book-info show-for-large">
	    <a href="<?php echo get_permalink(); ?>"></a>
		  	<?php $row = get_field('book_review', get_the_id()); ?>
		  	<?php if (!empty($row)) :?>
		  		<?php $rand_row = $row[ array_rand( $row ) ]; ?>
			  	<?php $source = $rand_row['book_review_source']; ?>
						<span class="review"><?php echo $rand_row['book_review_text'];?></span>
						<span class="source">- <?php echo $source;?></span>
						<?php else: ?>
							<?php the_excerpt(); ?>
						<?php endif; ?>		
    </div><?php
    echo '</div>';
	endwhile; 

?></div>
	<div class="books-opaque-left"><i class="fa fa-chevron-circle-left books-left"></i></div>	
<? }

function logo_carousel() {
	wp_reset_postdata(); ?>
	
		<div class="row data-equalizer">
			<h4>As seen in</h4>
			<div class="large-up-5">
				<div class="column">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nyt_logo.png" alt="Nyt Logo" data-pin-nopin="true" data-equalizer-watch>
				</div>	
				<div class="column">				
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wsj_logo.png" alt="Wsj Logo" data-pin-nopin="true" data-equalizer-watch>
				</div>						
				<div class="column">					
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wp_logo.png" alt="Wp Logo" data-pin-nopin="true" data-equalizer-watch>
				</div>						
				<div class="column">					
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/npr_logo.png" alt="Npr Logo" data-pin-nopin="true" data-equalizer-watch>
				</div>						
				<div class="column">					
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/y_logo.png" alt="Y Logo" data-pin-nopin="true" data-equalizer-watch>	
				</div>							
			</div>
		</div>
		
<?php }

function about_jeff() { 
	wp_reset_postdata();?>
	<div class="large-7 small-12 columns about-video"><?php echo do_shortcode('[videojs height="355" width="631" mp4="/wp-content/uploads/2016/04/jeffselingoauthorbooklifeaftercollegeeducationweekendessay-160415190029-lva1-app6891-video-SD.mp4" poster="/wp-content/uploads/2016/05/video.jpg"]');?></div>	
	<div class="large-5 small-12 columns about-jeff-text">
<!-- 		<?php $aboutJeff = get_field('about_jeff_photo', get_the_id()); ?> -->
<!-- 		<div class="about-jeff-photo"><img src="<?php echo $aboutJeff['url']; ?>"></div> -->
		<h4>About Jeff</h4>
		<div class="about-text">
			<?php echo get_field('about_jeff', 44); ?>
<!-- 			<a href="/about">Read More <i class="fa fa-angle-double-right"></i></a> -->
		</div>
	</div>
 <?php } 

// Footer contact form for contacting Jeff	
function footer_contact_jeff() { 
	echo do_shortcode('[contact-form-7 id="46" title="Contact Jeff"]');
} 


function special_video() { ?>
	<div class="large-5 small-12 columns about-jeff-text">
		<h4><?php echo get_field('special_video_title', 44); ?></h4>
		<?php echo get_field('special_video_text', 44); ?>
	</div>
	<div class="large-7 small-12 columns about-video">
		<?php echo get_field('special_video', 44); ?>		
	</div>
<?php }

 ?>