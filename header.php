<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<title>
		<?php wp_title(''); ?>
	</title>
	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wp-helpers.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- GOOGLE WEB FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>

	<!-- FONT AWESOME FOR ICONS -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
<div class="container">
	<header class="row">
		<div class="" id="logo">
			<a href="<?php echo home_url(); ?>"><img src="" alt=""></a>
		</div>
		<nav class="visible-md visible-lg" id="navigation">
			<?php wp_nav_menu(array('menu' => 'Primary' )); ?>
		</nav>
		<nav class="" id="mobile-navigation">
			<div class="hidden-md hidden-lg" id="mobile-close"><a href="#"><i class="fa fa-close fa-2x"></i></a></div>
			<?php wp_nav_menu(array('menu' => 'Primary' )); ?>
		</nav>
		<div class="hidden-md hidden-lg" id="mobile-open"><a href="#"><i class="fa fa-bars fa-2x"></i></a></div>
	</header>