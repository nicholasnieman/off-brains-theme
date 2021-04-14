<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="icon" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/img/icon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header clearfix">
		<div class="width-container">
			<a href="" id="header-logo">
			<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/logo.svg' ); ?>
			</a>
			<nav class="main-nav">
				<a href="#about-us">About Us</a>
				<a href="#what-we-do">What We Do</a>
				<a href="#our-designs">Our Designs</a>
				<a id="main-nav-button" href="#work-with-us">Work With Us</a>
			</nav>
		</div>
	</header>
