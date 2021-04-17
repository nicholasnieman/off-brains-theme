<?php
/* Template Name: Main Template */
get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="cta-section" class="width-container clearfix">
			<div id="hero-cta">
				<h1 id="hero-text">Digital Marketing Experts<br>for Mental Health<br>Professionals</h1> 
				<a id="hero-cta-btn" href="#work-with-us">Schedule Free Consultation</a>
			</div>
			<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/hero.svg' ); ?>
		</div>
		
		<div id="about-us" class="fade-in width-container clearfix">
			<div class="slide-in section-heading clearfix"><h2>About us</h2></div>
			<div id="about-description">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/sign.png" />

				<p><b>Off Brains</b> is a U.S. based team of talented Marketing, Software Development, and Design professionals dedicated to providing the best possible solutions and services to mental health therapists.</p>

				<p>We can help your business get <b>More Clients</b> and be <b>More Efficient</b> by streamlining processes and integrating technologies so you can spend your time focusing on your patients. </p>

				<p><b>Schedule a Free Consultation</b> now to find out what we can do for your practice.</p>
			</div>
			<div id="about-img">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/mockup.jpg" />
			</div>
		</div>

		<?php get_template_part( 'what-we-do'); ?>

		<?php get_template_part( 'our-designs'); ?>
		
		<div id="work-with-us" class="fade-in">
			<div class="slide-in section-heading clearfix"><h2>Work with us</h2></div>
			<div id="calendar-text" class="slide-up width-container">
				<h3>Schedule a Free 30 minute consultation</h3>
				<p>Pick a date and time in the calendar below and we will send you a link to a Zoom meeting in less than 5 minutes</p>
			</div>
			<!-- Calendly inline widget begin -->
			<div class="calendly-inline-widget" data-url="https://calendly.com/offbrains/off-brains-consultation-call?hide_event_type_details=1&amp;hide_gdpr_banner=1&amp;primary_color=444db7" style="min-width:320px;height:750px;"></div>
			<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async=""></script>
			<!-- Calendly inline widget end -->
		</div>
		

	</main><!-- #main -->

<?php
get_footer();
