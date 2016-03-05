					<div class="pre-footer" id="prefooter">
						<div class="row">
							<div class="large-4 columns footer-contact">
								<h4>Contact Jeff</h4>
								<?php footer_contact_jeff(); ?>
							</div>
							<div class="large-4 columns">
								<h4>Recent Tweets</h4>
								<?php include('Twitter.php'); ?>	
								<?php foreach($twitter_data as $tweet) { ?>
									<div class="tweet">
										<div class="large-2 medium-1 small-2 columns prof-img">
											<span class="profile_img"><a href="https://twitter.com/jselingo" target="_blank"><img src="https://twitter.com/jselingo/profile_image"></a></span>
										</div>	
										<div class="large-10 medium-11 small-10 columns tweet-info">
											<div class="tweet-top">
												<span class="name"><?php echo $tweet->user->name; ?></span>
												<span class="userid">&nbsp;@<?php echo $tweet->user->screen_name; ?>&nbsp;&#183;&nbsp;</span>	
												<span class="date">
													<?php 
														$date = new DateTime($tweet->created_at);
														$date->setTimezone(new DateTimeZone('America/New_York'));
														$formatted_date = $date->format('M d');	
														echo $formatted_date;			
													?>
												</span><br>														
											</div>														
											<span class="tweet-text"><?php echo linkify_tweet($tweet->text); ?></span>										
											<div class="intents">
												<span class="reply"><a target="_blank" href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $tweet->id; ?>" title="Reply"><i class="fa fa-reply"></i>&nbsp;&nbsp;&nbsp;</a></span>
												<span class="retweet"><a target="_blank" href="https://twitter.com/intent/retweet?tweet_id=<?php echo $tweet->id; ?>" title="Retweet"><i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;</a></span>
												<span class="favorite"><a target="_blank" href="https://twitter.com/intent/favorite?tweet_id=<?php echo $tweet->id; ?>" title="Favorite"><i class="fa fa-heart"></i>&nbsp;&nbsp;&nbsp;</a></span>
											</div>			
										</div>	
								</div>		
								<?php } ?>							
							</div>
							<div class="large-4 columns">
								<h4>Resources</h4>
		    						<?php joints_footer_links(); ?>
								<h4>Social</h4>					
								<?php if( have_rows('social_media_links' ,'option') ): ?>
									<?php while( have_rows('social_media_links' ,'option') ): the_row(); 
										$social_link = get_sub_field('social_link' ,'option');
										$social_icon = get_sub_field('social_icon' ,'option');
										?>
										<?php// if($social_link && $social_icon): ?>
											<a href="<?php echo $social_link; ?>" target="_blank" class="footer-social"><?php echo $social_icon; ?></a>
										<?php //endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>		
						</div>	
					</div>	
					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->	
		<?php wp_footer(); ?>
		<div class="back-to-top"><i class="fa fa-chevron-circle-up"></i></div>				
	</body>
</html> <!-- end page -->