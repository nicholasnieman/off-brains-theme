<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Off Brains</title>
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

			<div id="mobile-nav-icon">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>

			<nav id="main-nav">
				<a id="about-us-link" class="nav-link" href="#about-us">About Us</a>
				<a id="what-we-do-link" class="nav-link" href="#what-we-do">What We Do</a>
				<a id="our-designs-link" class="nav-link" href="#our-designs">Our Designs</a>
				<a id="main-nav-button" class="nav-link" href="#work-with-us">Work With Us</a>
			</nav>
		</div>
	</header>
