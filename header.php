<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7183554/717926/css/fonts.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<script>try{Typekit.load();}catch(e){}</script>

<?= Rye::stylesheet() ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<img class="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/personal-logo.png"/>
		<nav>
			<div class='item' data-section='.design'><a href='javascript:void(0);'>Design</a></div>
			<div class='item' data-section='.about'><a href='javascript:void(0);'>About</a></div>
			<div class='item'><a href="<?php echo get_field('resume'); ?>" target="_blank">Resume</a></div>
			<div class='item' data-section='.contact'><a href='javascript:void(0);'>Contact</a></div>
		</nav>
	</header>
