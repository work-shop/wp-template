</div>

<footer id="footer" class="bg-brand loading">
	<div class="container">
		<div class="row">
			<a id="logo-footer" class="logo left" href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/_/img/logo2.png" alt="logo">
			</a>
			<div id="footer-right" class="right">
				<a id="backtotop" href="#">back to top <span class="icon" data-icon="&#8220;"></span></a> share
				<a class="addthis_button_facebook" addthis:url="<?php the_permalink(); ?>"  addthis:title="Mikyoung Kim Design"><span class="icon " data-icon="F"></span></a>							
				<a class="addthis_button_twitter" addthis:url="<?php the_permalink(); ?>" addthis:title="Mikyoung Kim Design"><span class="icon " data-icon="t"></span></a>				 
			</div>			
		
		</div>
		<div class="row footer-nav">
			<?php get_template_part('nav'); ?>										
		</div>
		<div class="row footer-info">
			<div class="col-sm-12">
				<p class="small centered">
					mikyoung kim design • 119 braintree street, suite 103 • boston, MA 02134 • 617-782-9130 • <a href="mailto:office@myk-d.com" target="_blank">office@myk-d.com</a>
				</p>
			</div>			
			<div class="col-sm-12">
				<p class="small centered">
					Copyright 2014, mikyoung kim design. •
					
					<a href="<?php bloginfo('url'); ?>/wp-admin" target="_blank">Log In</a>
				</p>
			</div>	
		</div>
	</div>
</footer>
	
<?php wp_footer(); ?>

<div id="foot" class="hidden">
		
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f20b8a658458ce"></script>	
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/flexslider.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/isotope.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/iso.js"></script>		

</div>
	
</body>

</html>