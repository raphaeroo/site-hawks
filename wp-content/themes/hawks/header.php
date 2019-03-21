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
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/icones/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css" />
  <!-- Fim Styles CSS -->
<?php wp_head();?>
</head>
<body itemscope itemtype="http://schema.org/WebPage" <?php body_class();?>>
<header>
<div class="topo-site text-center">
	<div class="container level">
		<div class="level-left">
    <div class="level-item">
      <p class="subtitle is-5">
        <strong>Hawks</strong> - Agência de Marketing Digital
      </p>
    </div>
  </div>
  <div class="level-right sem-cel">
		<p class="level-item"><i class="fab fa-whatsapp"></i> +55 11 94245-3563 <i class="fab fa-facebook"></i><i class="fab fa-instagram"></i><i class="fa fa-envelope"></i>
		</p>
  </div>
</div>
</div>
<div class="menu">
<div class="container so-cel ">
	<div class="row justify-content-around align-items-center">
		<div class="col-8"><img src="<?php bloginfo('template_directory');?>/img/logo-cor.png" alt="" style=""></div>
		<div class="col-2 text-right"><i class="fa fa-bars"></i></div>
	</div>
</div>
<div class="container sem-cel">
<nav class="level">
  <p class="level-item has-text-centered">
    <a class="link is-info">Home</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Blog</a>
  </p>
  <p class="level-item has-text-centered">
    <img src="<?php bloginfo('template_directory');?>/img/logo-icon.png" alt="" style="height: 7em;">
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Serviços</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Contato</a>
  </p>
</nav>
</div>
</div>
</header>
