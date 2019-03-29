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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css" />
  <!-- Fim Styles CSS -->
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/favicon/safari-pinned-tab.svg" color="#5e92fe">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
<?php wp_head();?>
</head>
<body itemscope itemtype="http://schema.org/WebPage" <?php body_class();?>>
	<button onclick="topFunction()" id="myBtn" data-placement="left" data-toggle="tooltip" title="Topo"><i class="fas fa-caret-up"></i></button>
	<!-- Inicio Sidebar -->
	<div class="sidebar so-cel" id="sidebar">
		<div class="container-fluid">
			<div class="col-12 text-center">
				<img src="<?php bloginfo('template_directory');?>/img/logo-icon.png" alt="Agência Hawks" style="">
			</div>
			<div class="wrap-links">
				<ul>
					<a href="#"><li>Link&nbsp;1</li></a>
					<a href="#"><li>Link&nbsp;1</li></a>
					<a href="#"><li>Link&nbsp;1</li></a>
					<a href="#"><li>Link&nbsp;1</li></a>
				</ul>
			</div>
		</div>
	</div>
	<!-- Fim Sidebar -->
	<!-- Menu Fixo -->
	<div class="menu-fixo" id="menu-fixo">
		<div class="container so-cel ">
			<div class="row justify-content-around align-items-center">
				<div class="col-8"><img src="<?php bloginfo('template_directory');?>/img/logo-cor.png" alt="Agência Hawks" style=""></div>
				<div class="col-2 text-right"><i class="fa fa-bars" id="toggle-sidebar"></i></div>
			</div>
		</div>
		<div class="container level sem-cel">
			<div class="level-left">
	    <div class="level-item">
	      <img src="<?php bloginfo('template_directory');?>/img/logo-cor.png" alt="Agência Hawks" style="max-width: 25%;">
	    </div>
	  </div>
	  <div class="level-right sem-cel" style="padding-top: 1em;">
			<p class="level-item has-text-centered">
		    <a class="link is-info">Home</a>
		  </p>
		  <p class="level-item has-text-centered">
		    <a class="link is-info">Blog</a>
		  </p>
		  <p class="level-item has-text-centered">
		    <a class="link is-info">Serviços</a>
		  </p>
		  <p class="level-item has-text-centered">
		    <a class="link is-info">Contato</a>
		  </p>
			<p class="level-item"><a href="javascript()" data-toggle="modal" data-target="#orc-rapido" class="button bto-top">Orçamento Rápido</a></p>
	  </div>
	</div>
	</div>
	<!-- Fim Menu Fixo -->
	<!-- MODAIS -->
	<!-- Modal -->
<div class="modal fade" id="orc-rapido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal">Resposta em Até 5h</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
				<form>
			  <div class="form-group">
			    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nome">
			  </div>
				<div class="form-group">
			    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="E-Mail">
			  </div>
				<div class="form-group">
			    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Telefone">
			  </div>
				<div class="form-group">
			    <select class="form-control">
						<option>-- Como podemos Ajudar? --</option>
			      <option>Desenvolvimento de Sites</option>
			      <option>SEO (Busca Orgânica)</option>
			      <option>SMM (Redes Sociais)</option>
			      <option>PPC (Google Adwords)</option>
			      <option>Outros</option>
			    </select>
			  </div>
				<div class="form-group">
			    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Sua Mensagem" rows="3"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Enviar</button>
			</form>
      </div>
    </div>
  </div>
</div>
	<!-- FIM MODAIS -->
<header>
<div class="topo-site text-center animated fadeInUp sem-cel">
	<div class="container level">
		<div class="level-left">
    <div class="level-item">
      <h1 class="subtitle is-5">
        <strong>Hawks</strong>&nbsp;<i class="fas fa-caret-right"></i>&nbsp;Agência de Marketing Digital
      </h1>
    </div>
  </div>
  <div class="level-right">
		<p class="level-item"><a class="link-zap" href="#"><i class="fab fa-whatsapp"></i> +55 11 94245-3563</a> <i class="fab fa-facebook"></i><i class="fab fa-instagram"></i><i class="fa fa-envelope"></i> |
		</p>
		<p class="level-item"><a href="javascript()" data-toggle="modal" data-target="#orc-rapido" class="button bto-top">Orçamento Rápido</a></p>
  </div>
</div>
</div>
<div class="menu">
<div class="container so-cel ">
	<div class="row justify-content-around align-items-center">
		<div class="col-8"><img src="<?php bloginfo('template_directory');?>/img/logo-neg.png" alt="Agência Hawks" style=""></div>
		<div class="col-2 text-right"><i class="fa fa-bars" id="toggle-sidebar-2"></i></div>
	</div>
</div>
<div class="container sem-cel">
<nav class="level animated fadeInUp delay-1s">
  <p class="level-item has-text-centered">
    <a class="link is-info">Home</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Blog</a>
  </p>
  <p class="level-item has-text-centered">
    <img src="<?php bloginfo('template_directory');?>/img/logo-icon.png" alt="Agência Hawks" style="height: 7em;" data-placement="bottom" data-toggle="tooltip" title="Agência Hawks" >
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
