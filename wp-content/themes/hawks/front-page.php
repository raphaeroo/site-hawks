<?php get_header();?>
<section id="slider">
  <div id="homeCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner align-items-center" role="listbox">
        <div class="carousel-item active">
          <div class="content-slider slider-1">
            <div class="container">
            <h2 class="animated fadeInUp delay-2s">Bem Vindo a <span>Agência Hawks<span></h2>
            <h3 class="animated fadeInUp delay-3s title">
              Nosso trabalho é proporcionar meios para que pequenas empresas possam crescer nesse mercado super competitivo que é a Internet
            </h3>
          </div>
        </div>
          <div class="the-wrap">
          <video id="home-video" style="width: auto; height: 100%; margin: 0; padding: 0;" muted autoplay loop playsinline>
            <source src="<?php bloginfo('template_directory'); ?>/images/videos/explore.mp4" type="video/mp4">
              <source src="<?php bloginfo('template_directory'); ?>/images/videos/explore.webm" type="video/webm">
          </video>
        </div>
      </div>
        <div class="carousel-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/bg-2.jpg')">
          <div class="the-wrap-slider-2">
          <div class="content-slider slider-2">
            <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 col-lg-6 sem-cel">
              <img class="animated rotateInUpLeft delay-1s" src="<?php bloginfo('template_directory'); ?>/img/mkt-digital-flaticon.png" style="height: auto; width: 100%;" />
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <div class="animated rotateInDownRight delay-2s">
              <small>Apresentamos:</small>
              <h3 class="title">Marketing Digital</h3>
              <h2>Descomplicado</h2>
              <p>Faça sua empresa crescer e ultrapasse a concorrência no mercado digital sem gastar fortunas de mensalidade.</p>
              <p>Fale conosco e entenda por que somos diferentes <i class="fas fa-smile-wink"></i>
              </div>
              <a class="button animated bounceInUp delay-3s" href="#">Quero Saber Mais!</a>
            </div>
          </div>
          </div>
          </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/2.jpg')">
          <div class="the-wrap-slider-3">
          <div class="content-slider slider-3">
            <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
            <h2 class="animated bounceInDown delay-1s">Sites Responsivos</h2>
            <h3 class="animated bounceInUp delay-2s title">Tenha seu site funcionando em todos os Dispositivos</h3>
            <a class="button animated fadeInLeft delay-4s sem-cel" href="#">Quero Saber Mais!</a>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" >
              <img class="animated bounceInRight delay-3s" src="<?php bloginfo('template_directory');?>/img/responsive.png" style="width: auto; height: 100%;" />
              <a class="button animated fadeInLeft delay-4s so-cel" href="#">Quero Saber Mais!</a>
            </div>
          </div>
        </div>
        </div>
      </div>
      </div>
      <a class="carousel-control-prev sem-cel" href="#homeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next sem-cel" href="#homeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
      <a href="#corpo-teste" class="scroll-to-section-2"><i class="fas fa-angle-double-down"></i></a>
    </div>
</section>
<section id="corpo-teste">
</section>




<?php get_footer();?>
