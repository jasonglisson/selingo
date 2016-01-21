<?php

// Feature area that is switchable 
function homepage_feature() {
	wp_reset_postdata();	
	if (get_field('homepage_feature') == 'book') { ?>
		<div class="overlay" style="background:#666666;"></div>	
		<div class="large-8 medium-12 small-12 columns">
			test
		</div>
		<div class="large-4 columns">
			test
		</div>		
<?php } else if (get_field('homepage_feature') == 'event') { ?>
		<div class="overlay" style="background:#666;"></div>
		<?php if( have_rows('event') ): ?>
			<?php while( have_rows('event') ): the_row(); 
				$eventHeading = get_sub_field('event_title'); 
				$eventTitleTop = get_sub_field('event_title_top');
				$eventTitleBottom = get_sub_field('event_title_bottom');
				$eventBG = get_sub_field('event_background_image');				
			?>
			<div class="event-bg-image" style="background-image:url(<?php echo $eventBG; ?>);">test</div>
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
			<a href="#" class="button">Read More</a>
		</div>
				<div class="large-5 columns show-for-large">
					test
				</div>		
		</div>	
			<?php endwhile; ?>	
		<?php endif; ?>
<?php	} else if (get_field('homepage_feature') == 'booking') { ?>
		<div class="overlay" style="background:#666666;"></div>
		<div class="large-8 medium-12 small-12 columns">
			test
		</div>
		<div class="large-4 columns">
			test
		</div>	
<?php	}
}

// Subscription form for signing up for newsletters	
function selingo_subscribe_form() { ?>
	<h4>Subscribe!</h4>
	<h5>Sign up for my newsletter to receive updates and insights on the college of the future.</h5>
	<?php echo do_shortcode('[contact-form-7 id="64" title="Subscription"]');
} 

// Book reivew list
function selingo_book_reviews_block() {
	
}

function book_carousel() { ?>
	<div class="book-carousel row"> <?php
	wp_reset_postdata();
  $args = array( 'post_type' => 'book', 'posts_per_page' => 3 );
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
    	echo '<div class="book-img"><a href="' . get_permalink() .'"><img src="' . $bookImg['url'] .'"></a><a href="' . get_permalink() . '" class="button">Learn More</a></div>';
    	//echo '<div class="book-title"><a href="' . get_permalink() .'">' . get_field('full_book_title') . '</a></div>';    
    	//echo '<a href="' . get_permalink() . '" class="button">Learn More</a>';
    ?>
    <div class="book-info">
    	<?php the_excerpt(); ?>
    </div><?php
    echo '</div>';
	endwhile; 

?></div>	
<? }

function about_jeff() { 
	wp_reset_postdata();
	$aboutVid = get_field('about_jeff_video', get_the_id()); ?>
	<div class="large-6 small-12 columns about-jeff-text">
		<?php $aboutJeff = get_field('about_jeff_photo', get_the_id()); ?>
		<div class="about-jeff-photo"><img src="<?php echo $aboutJeff['url']; ?>"></div>
		<h4>About Jeff</h4>
		<div class="about-text">
			<?php echo get_field('about_jeff', get_the_id()); ?>
			<a href="/about">Read More <i class="fa fa-angle-double-right"></i></a>
		</div>
	</div>
	<div class="large-6 small-12 columns about-video"><?php print_r($aboutVid); ?></div>
 <?php } 

// Footer contact form for contacting Jeff	
function footer_contact_jeff() { 
	echo do_shortcode('[contact-form-7 id="46" title="Contact Jeff"]');
} 

 ?>