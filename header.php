<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="theme-color" content="#22abeb">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
			<?php wp_nav_menu( array(
				'walker' => new crea_Walker_Nav_Menu(),
				'container'=> false,
				'menu_class'=> false,
				'menu_id'=> 'header-nav',
				'theme_location' => 'primary'
			) ); ?>
		</nav>
	</header>
	</main>
