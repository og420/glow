<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fullpage.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/statement.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
