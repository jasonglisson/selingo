<?php get_header(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/landing-page.css" type="text/css" media="screen">
	<div class="top-bg" style="background-image:url(<?php print the_field('top_background_image');?>);">
		<div class="bg-overlay" style="background-color: <?php print the_field('background_overlay_color'); ?>"></div><!--END bg-overlay-->	
		<div class="container">
			<div class="row">
				<div class="span10 centered">
					<div class="entry">
						<h1><?php echo the_field('top_title_text'); ?></h1>
						<h2><?php echo the_field('top_subheader_text'); ?></h2>						
					</div><!--END entry-->				
				</div><!--end span12 -->
				<div class="clr"></div>
			</div><!--end row -->
		</div><!--END container-->
	</div><!--END top-bg-->
	<div class="container">
		<div class="row content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<div id="mc_embed_signup">
				<form id="mc-embedded-subscribe-form" class="validate" action="//jeffselingo.us2.list-manage.com/subscribe/post?u=fa84525374660a0f2b34f22f1&amp;id=f2786b3c0e" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
					<div id="mc_embed_signup_scroll">
						<div class="mc-field-group large-3 columns">
							<label for="mce-NAME">Your Name <span class="asterisk">*</span></label>
							<input id="mce-NAME" class="required" name="NAME" type="text" value="" placeholder="Your Name" />
						</div>
						<div class="mc-field-group large-3 columns">
							<label for="mce-TITLE">Title</label>
							<input id="mce-TITLE" class="" name="TITLE" type="text" value="" placeholder="Title" />
						</div>
						<div class="mc-field-group large-3 columns">
							<label for="mce-ORG">Organization <span class="asterisk">*</span></label>
							<input id="mce-ORG" class="required" name="ORG" type="text" value="" placeholder="Organization" />
						</div>
						<div class="mc-field-group large-3 columns">
							<label for="mce-EMAIL">Your Email <span class="asterisk">*</span></label>
							<input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="Your Email" />
						</div>
						<div id="mce-responses" class="clear"></div>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_fa84525374660a0f2b34f22f1_f2786b3c0e" type="text" value="" /></div>
						<div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>
					</div>
				</form>
			</div>
<!--End mc_embed_signup-->			
		</div>	
	</div>	
	
<?php get_footer(); ?>