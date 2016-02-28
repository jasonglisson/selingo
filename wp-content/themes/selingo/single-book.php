<?php
/*
Template: Single Book
*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<div class="large-3 columns book-image">
			<img src="<?php echo get_field('book_image');?>" />
<!--
							<br><br>
			<div class="callout secondary">
				<h3>Other Books</h3>
				<?php 
					  $this_post = $post->ID;
				    $args = array( 'post_type' => 'book', 'post__not_in' => array($this_post), 'posts_per_page' => 1 );
				    $loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
				    //the_title();
				    	echo '<img src="' . get_field('book_image', get_the_id()) . '">';
						endwhile; 
						wp_reset_postdata();	?>	
			</div>
-->	
		</div>
		<main id="main" class="large-9 columns" role="main">
			<h2 class="book-title"><?php the_title() ?></h2>
			<h4 class="book-subtitle"><?php the_field('book_subtitle');?></h4>
			<p class="book-summary"><?php the_field('brief_book_summary'); ?></p>
			<button class="button purchase-book" type="button" data-toggle="purchase-dropdown-1">Purchase This Book<?php ///echo $bookbuttontext; ?><i class="fa fa-caret-down"></i></button>
			<div class="dropdown-pane purchase-options" id="purchase-dropdown-1" data-dropdown data-hover="false">
				<?php if( have_rows('buy_links')) : ?>
						<?php	while( have_rows('buy_links') ): the_row(); ?>
									<a href="<?php the_sub_field('purchase_book_link');?>#" class="book-purchase" target="_blank"><?php the_sub_field('purchase_book_site');?></a>
					<?php endwhile; ?>
				<?php	endif; ?>										
			</div>
			<button class="button share-book hollow" type="button" data-toggle="share-dropdown-1">Share<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-pane share-options" id="share-dropdown-1" data-dropdown data-hover="false">
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" class="book-share" target="_blank">Facebook<i class="fa fa-facebook-square"></i></a>	
				<a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" class="book-share" target="_blank">Twitter<i class="fa fa-twitter-square"></i></a>
				<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo the_title() ?>" class="book-share" target="_blank">LinkedIn<i class="fa fa-linkedin-square"></i></a>	
				<a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" class="book-share" target="_blank">Google+<i class="fa fa-google-plus-square"></i></a>																			
			</div>
			<ul class="tabs" data-tabs id="example-tabs">
			  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Description</a></li>
			  <li class="tabs-title"><a href="#panel2">Reviews</a></li>
			</ul>
			<div class="tabs-content" data-tabs-content="example-tabs">
			  <div class="tabs-panel is-active" id="panel1">
			    <p>
						<?php 
						$id = get_the_ID(); 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;  
						?>			    
			    </p>
			  </div>
			  <div class="tabs-panel" id="panel2">
					<?php if( have_rows('book_review')) : ?>
							<?php	while( have_rows('book_review') ): the_row(); ?>
										<div class="book-review">
											<span class="review"><?php the_sub_field('book_review_text');?></span>
											<span class="source">- <?php the_sub_field('book_review_source');?></span>
										</div>
						<?php endwhile; ?>
					<?php	endif; ?>			
			  </div>
			</div>			
		</main> <!-- end #main -->



	</div> <!-- end #inner-content -->
		<?php// get_sidebar(); ?>
</div> <!-- end #content -->
<div class="signup-form-section">
	<div class="row">
  	<?php selingo_subscribe_form(); ?>
	</div>
</div> 
<div class="about-jeff-section">
	<div class="row">
		<?php about_jeff(); ?>
	</div>	
</div>	   
<?php get_footer(); ?>