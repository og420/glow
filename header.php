<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- slick cdn （CSSだけCDNでうまく読み込めなかったのでディレクトリから読み出すことにした。CDNだけでできるのが理想） -->
	<link rel='stylesheet' type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- end -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fullpage.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/statement.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="globalNav js-globalNav">
	<div class='header_search_box header_search_box--device_sp'>
		<?php get_search_form(); ?>
	</div>
	<div class="globalNav__categories">
		<h3>CATEGORIES</h3>
		<ul>
			<?php
			$args = array(
					'orderby' => 'count',
					'order' => 'DSC',
					'parent' => 0
			);
			$categories = get_categories( $args );

			foreach( $categories as $category ){
				echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
			}
			?>
		</ul>
	</div>
	<div class="globalNav__categories">
		<h3>OTHERS</h3>
		<ul>
			<li><a href="<?php echo esc_url( home_url('/')); ?>statement" target="_blank">当メディアについて</a>
			<li><a href="#" target="_blank">ご利用規約</a>
			<li><a href="#" target="_blank">プライバシーポリシー</a>
		</ul>
	</div>
</div>

<header id='glow_header'>
  <div class='header_left_content'>
    <div class='header_logo'>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri();?>/imgs/logo.png">
			</a>
    </div>
    <div class='header_search_box'>
			<?php get_search_form(); ?>
    </div>
  </div>
  <div class='header_burger_icon js-header__burger__icon'>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</header>