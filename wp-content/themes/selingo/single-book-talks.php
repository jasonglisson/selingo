<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
<div id="content">

	<div id="inner-content" class="row">

		<div class="large-12 columns">
			<?php $date = get_field('date');
			$date2 = date("F j, Y", strtotime($date)); ?>								
			<h1 class="page-title"><span><?php echo $date2;?> / <?php echo get_field('city'); ?></span></h1>	
			<h1 class="page-title mobile"><?php echo $date2;?></h1>				
			<h1 class="page-title mobile"><?php echo get_field('city'); ?></h1>				
		</div>	

		<div class="large-3 small-12 columns">
			<div class="book-location">
				<?php if(get_field('location')): ?>	
					<div class="book-talk-location">
						<div class="book-talk-city"><i class="fa fa-map-marker"></i><?php echo get_field('city'); ?></div>								
						<?php echo get_field('location'); ?>
					</div>	
				<?php endif; ?>				
			</div>
		</div>	
		
		<main id="main" class="large-9 small-12 columns first" role="main">				
			<?php if(get_field('description')):?>
				<div class="book-talk-description"><?php echo get_field('description'); ?></div>	
			<?php endif; ?>						
		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

	<?php book_talks(); ?>	

</div> <!-- end #content -->

<?php get_footer(); ?>