<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fullpage.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/statement.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="header__logo">
		<a href="#">
			<img src="<?php echo get_template_directory_uri();?>/imgs/logo.png">
		</a>
	</div>
	<div class="header__nav">
		<ul>
			<li><a href="#">All POSTS</a></li>
			<li><a href="#">ABOUT US</a></li>
		</ul>
	</div>
</header>
