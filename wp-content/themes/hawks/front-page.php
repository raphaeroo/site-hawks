<?php get_header();?>
<section id="slider">
  <div id="homeCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner align-items-center" role="listbox">
        <div class="carousel-item active">
          <div class="content-slider slider-1">
            <h2 class="animated fadeInUp delay-1s">Bem Vindo a Agência Hawks</h2>
            <h3 class="animated fadeInUp delay-2s title">A Melhor <strong>Agência de Marketing Digital</strong></h3>
          </div>
          <div class="video-wrap">
          <video id="home-video" style="width: auto; height: 100%; margin: 0; padding: 0;" muted autoplay loop playsinline>
            <source src="<?php bloginfo('template_directory'); ?>/images/videos/explore.mp4" type="video/mp4">
              <source src="<?php bloginfo('template_directory'); ?>/images/videos/explore.webm" type="video/webm">
          </video>
        </div>
      </div>
        <div class="carousel-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/1.jpg')">
          <div class="content-slider">
            <h1 class="animated fadeInUp delay-1s">Teste</h1>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/2.jpg')">
          <div class="content-slider">
            <h1 class="animated fadeInUp delay-1s">Teste</h1>
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
    </div>
</section>
<section id="corpo-teste">
</section>




<?php get_footer();?>
