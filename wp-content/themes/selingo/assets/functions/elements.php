<?php

// Subscription form for signing up for newsletters	
function selingo_subscribe_form() { ?>
	<h4>Subscribe!</h4>
	<?php echo do_shortcode('');
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
			if( in_array('new', $newBook) ) {
				echo '<div class="new-book">NEW</div>';	
			}	else {
				echo '';
			}
    	echo '<div class="book-img"><i class="fa fa-info-circle book-toggle"></i><a href="' . get_permalink() .'"><img src="' . $bookImg['url'] .'"></a><a href="' . get_permalink() . '" class="button">Learn More</a></div>';
    	//echo '<div class="book-title"><a href="' . get_permalink() .'">' . get_field('full_book_title') . '</a></div>';    
    	//echo '<a href="' . get_permalink() . '" class="button">Learn More</a>';
    ?>
    <div class="book-info">
    	<i class="fa fa-times close-info"></i>
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