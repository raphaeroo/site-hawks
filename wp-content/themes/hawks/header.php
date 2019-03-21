<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		    echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
		    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?>
	</title>
  <!-- Styles CSS -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/aos.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/owl.theme.default.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/bulma.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/icones/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css" />
  <!-- Fim Styles CSS -->
<?php wp_head();?>
</head>
<body itemscope itemtype="http://schema.org/WebPage" <?php body_class();?>>
<header>

</header>
