<?php
/*
Template: Single Book
*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<div class="large-3 columns book-image"><img src="<?php echo get_field('book_image');?>" /></div>
		<main id="main" class="large-9 columns" role="main">
			<h2 class="book-title"><?php the_title() ?></h2>
			<h4 class="book-subtitle">What Parents and Students Should Know About Navigating School to Prepare for the Jobs of Tomorrow</h4>
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
				<a href="#" class="book-purchase" target="_blank">Facebook</a>	
				<a href="#" class="book-purchase" target="_blank">Twitter</a>		
				<a href="#" class="book-purchase" target="_blank">LinkedIn</a>	
				<a href="#" class="book-purchase" target="_blank">Google+</a>																			
			</div>
		</main> <!-- end #main -->



	</div> <!-- end #inner-content -->
		<?php// get_sidebar(); ?>
</div> <!-- end #content -->

<?php get_footer(); ?>