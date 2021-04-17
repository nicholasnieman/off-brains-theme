<?php
?>

<div id="our-designs" class="fade-in width-container">

	<div class="slide-in section-heading clearfix"><h2>Our designs</h2></div>
	
	<div id="design-grid" class="slider">

		<div id="design-1" class="slide-up design">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/1.jpg"/>
			<div class="view-design">
				<div>
					<span class="view-design-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/search-icon.svg' ); ?></span>
					<span class="view-design-text">View Page</span>
				</div>
			</div>
		</div>	

		<div id="design-2" class="slide-up design">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/2.jpg"/>
			<div class="view-design">
				<div>
					<span class="view-design-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/search-icon.svg' ); ?></span>
					<span class="view-design-text">View Page</span>
				</div>
			</div>
		</div>	

		<div id="design-3" class="slide-up design">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/3.jpg"/>
			<div class="view-design">
				<div>
					<span class="view-design-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/search-icon.svg' ); ?></span>
					<span class="view-design-text">View Page</span>
				</div>
			</div>
		</div>	

		<div id="design-4" class="slide-up design">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/4.jpg"/>
			<div class="view-design">
				<div>
					<span class="view-design-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/search-icon.svg' ); ?></span>
					<span class="view-design-text">View Page</span>
				</div>
			</div>
		</div>	

		<div id="design-5" class="slide-up design">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/5.jpg"/>
			<div class="view-design">
				<div>
					<span class="view-design-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/search-icon.svg' ); ?></span>
					<span class="view-design-text">View Page</span>
				</div>
			</div>
		</div>	

		<div id="design-6" class="slide-up design">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/6.jpg"/>
			<div class="view-design">
				<div>
					<span class="view-design-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/search-icon.svg' ); ?></span>
					<span class="view-design-text">View Page</span>
				</div>
			</div>
		</div>

	</div>
	
</div>

<div id="design-modal">
	<div id="design-modal-background"></div>
	<div id="design-modal-content">
		<div id="page-viewer-heading">
			<div id="page-viewer-branding">
				<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/logo.svg' ); ?>
			</div>
			
			<span id="design-modal-close-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/close-icon.svg' ); ?></span>
		</div>
		<div id="design-modal-img-container">
			<img id="design-modal-img" src="">
		</div>
	</div>
</div>