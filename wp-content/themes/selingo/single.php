<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<div class="large-8 medium-8 columns" role="main">
			<h2 class="page-title"><?php echo the_title(); ?></h2>	
			<hr class="below-date">						
			<div class="blog-post-date"><?php echo get_the_date('l, F jS, Y'); ?></div>
			<div class="dotted-line"></div>
			    <?php
						if (have_posts()) :
						   while (have_posts()) :
						      the_post();
						         the_content();
						   endwhile;
						endif;		    
				  ?>  			
				<div id="disqus_thread"></div>
				<script>
				/**
				* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
				*/
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				
				s.src = '//jefferyselingo.disqus.com/embed.js';
				
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<script id="dsq-count-scr" src="//jefferyselingo.disqus.com/count.js" async></script>
		</div> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->
<div class="signup-form-section">
	<div class="row">
  	<?php selingo_subscribe_form(); ?>
	</div>
</div>    
<?php get_footer(); ?>