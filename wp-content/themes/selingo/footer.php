					<div class="pre-footer">
						<div class="row">
							<div class="large-4 columns">
								<h4>Contact Jeff</h4>
							</div>
							<div class="large-4 columns">
								<h4>Recent Tweets</h4>
								<?php include('Twitter.php'); ?>	
								<?php foreach($twitter_data as $tweet) { ?>
									<div id="tweet">
										<div class="large-2 columns profile-pic"><a href="https://twitter.com/jselingo" target="_blank"><i class="fi-social-twitter large"></i></a></div>
										<div class="large-10 columns tweet-wrap">
											<span class="date"><?php 
												
														$date = new DateTime($tweet->created_at);
														$date->setTimezone(new DateTimeZone('America/New_York'));
														$formatted_date = $date->format('M d, Y');	
														echo $formatted_date;			
									
											?></span><br>			
											<span class="tweet-text"><?php echo linkify_tweet($tweet->text); ?></span>
											<div class="intents">
												<span class="reply"><a target="_blank" href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $tweet->id; ?>"><i class="fi-arrow-left small"></i> Reply</a></span>
												<span class="retweet"><a target="_blank" href="https://twitter.com/intent/retweet?tweet_id=<?php echo $tweet->id; ?>"><i class="fi-loop small"></i> Retweet</a></span>					<span class="favorite"><a target="_blank" href="https://twitter.com/intent/favorite?tweet_id=<?php echo $tweet->id; ?>"><i class="fi-star small"></i> Favorite</a></span>
											</div>			
									</div>
								</div>		
								<?php } ?>							
							</div>
							<div class="large-4 columns">
								<h4>Resources</h4>
		    						<?php joints_footer_links(); ?>
								<h4>Social</h4>								
							</div>		
						</div>	
					</div>	
					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->