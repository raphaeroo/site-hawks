<?php get_header();?>
<section id="slider">
  <div id="homeCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner align-items-center" role="listbox">
        <div class="carousel-item active">
          <div class="content-slider slider-1">
            <div class="container">
            <h2 class="animated fadeInUp delay-2s"><small>Bem Vindo a:</small><br> <span>Agência Hawks<span></h2>
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
              <a class="button animated fadeInUp delay-3s" href="#">Quero Saber Mais!</a>
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
      <a href="#baixo-banner" class="scroll-to-section-2"><i class="fas fa-angle-double-down"></i></a>
    </div>
</section>
<section id="baixo-banner">
  <div class="container">
    <div class="row">
    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
      <div class="chama-form">
        <p>Faça um Orçamento</p>
        <h3>Temos a Solução para seu Negócio</h3>
        <h4>Tem um projeto? Ou uma dúvida? Pensando em usar a internet para aumentar seu faturamento? <strong>Fale Conosco!</strong><br> Se preferir, podemos ligar para você, basta deixar seu telefone e iremos entrar em contato, ou fale conosco pelo Whatsapp Agora Mesmo!</h4>
        <a class="button">
          <span class="icon">
            <i class="fab fa-whatsapp"></i>
          </span>
          <span>Whatsapp</span>
        </a>
      </div>
      <div class="espaco-padding-v"></div>
    </div>
    <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
      <div class="formulario-topo" data-aos="flip-left" data-aos-duration="1500">
        <?php echo do_shortcode('[contact-form-7 id="5" title="form-baixo-banner"]'); ?>
      </div>
    </div>
    </div>
  </div>
</section>
<section id="nossos-trabalhos">
  <div class="container">
    <div class="col-12 text-center"><p>O que Fazemos?</p>
      <h5>Soluções para Você</h5>
    </div>
    <div class="row text-center">
    <div class="col-md-6 mb-2 col-lg-6 mb-2 col-sm-6 col-xs-6">
      <div class="box-jobs" data-aos="zoom-out-right" data-aos-delay="50">
        <div class="header-box-jobs">
          <i class="fas fa-search"></i>
        </div>
        <div class="body-box-jobs">
          <h6>Busca Orgânica (SEO)<h6>
            <p>Você tem um site e não sabe como aparecer na primeira página do Google ou não tem tempo para executar estratégias de SEO? Deixe com a Hawks. <br>Nossos serviços de SEO são focados em conversão e garantem resultados eficientes.</p>
        </div>
        <div class="footer-box-jobs">
          <a href=""><button class="button-box-jobs">Quero Saber Mais</button></a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-2 col-lg-6 mb-2 col-sm-6 col-xs-6">
      <div class="box-jobs" data-aos="zoom-out-right" data-aos-delay="200">
        <div class="header-box-jobs">
          <i class="fas fa-globe"></i>
        </div>
        <div class="body-box-jobs">
          <h6>Sites Responsivos<h6>
            <p>Você tem um site e não sabe como aparecer na primeira página do Google ou não tem tempo para executar estratégias de SEO? Deixe com a Hawks. <br>Nossos serviços de SEO são focados em conversão e garantem resultados eficientes.</p>
        </div>
        <div class="footer-box-jobs">
          <a href=""><button class="button-box-jobs">Quero Saber Mais</button></a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-2 col-lg-6 mb-2 col-sm-6 col-xs-6">
      <div class="box-jobs" data-aos="zoom-out-right" data-aos-delay="350">
        <div class="header-box-jobs">
          <i class="fas fa-ad"></i>
        </div>
        <div class="body-box-jobs">
          <h6>Google Ads (PPC)<h6>
            <p>Você tem um site e não sabe como aparecer na primeira página do Google ou não tem tempo para executar estratégias de SEO? Deixe com a Hawks. <br>Nossos serviços de SEO são focados em conversão e garantem resultados eficientes.</p>
        </div>
        <div class="footer-box-jobs">
          <a href=""><button class="button-box-jobs">Quero Saber Mais</button></a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-2 col-lg-6 mb-2 col-sm-6 col-xs-6">
      <div class="box-jobs" data-aos="zoom-out-right" data-aos-delay="500">
        <div class="header-box-jobs">
          <i class="fas fa-thumbs-up"></i>
        </div>
        <div class="body-box-jobs">
          <h6>Mídias Sociais (SMM)<h6>
            <p>Você tem um site e não sabe como aparecer na primeira página do Google ou não tem tempo para executar estratégias de SEO? Deixe com a Hawks. <br>Nossos serviços de SEO são focados em conversão e garantem resultados eficientes.</p>
        </div>
        <div class="footer-box-jobs">
          <a href=""><button class="button-box-jobs">Quero Saber Mais</button></a>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<section id="responsivo">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 order-sm-2 order-xs-2 order-md-1 order-lg-1">
        <div class="hero-responsivo">
          <h3 data-aos="fade-right">Responsivo <span><br></span>de Verdade!</h3>
          <p>Nos últimos anos, o uso de smartphones cresceu rapidamente. Em 2014, apenas 22% recorreram primeiro ao celular para navegar na internet. Apenas 2/3 das pessoas possuíam um smartphone. Desde então, o lançamento da internet 4G e outras inovações impactaram o modo como as pessoas usavam dispositivos móveis; ao longo de 2014, as assinaturas 4G dispararam de 2,7 milhões para 23,6 milhões.</p>
          <p>Por estas razões, tornou-se indispensável ter seu site responsivo; sua empresa precisa de um site que funcione bem em um smartphone ou em outras telas de dispositivos móveis, devido à enorme quantidade de pessoas que poderiam estar seu site por meio desses aparelhos.</p>
          <a href="#" data-aos="fade" data-aos-duration="1000" data-aos-delay="1000"><button>Quero ter um Site Responsivo!</button></a>
        </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 order-sm-1 order-xs-1 order-lg-2 order-md-2">
        <div class="owl-carousel owl-theme text-center space-two" id="carousel">
	         <div class="item">
             <div class="tela-carousel tela-1"></div>
           </div>
           <div class="item">
             <div class="tela-carousel tela-2"></div>
           </div>
           <div class="item">
             <div class="tela-carousel tela-3"></div>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="vem-pra-hawks">
  <div class="container">
    <div class="col-12 text-center"><p>Aumente Suas Vendas</p>
      <h5>Conheça Nosso Método</h5>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
        <div class="metodo-box" data-aos="fade-down" data-aos-delay="100" >
          <div class="row">
            <div class="col-2">
              <div class="icon-metodo-box icon-1"></div>
            </div>
            <div class="col-10">
              <h6>Análise Completa de Dados</h6>
              <p>Não se engane, não existe fórmula pronta. Por isso cuidamos de cada cliente individualmente analisando cada situação.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
        <div class="metodo-box" data-aos="fade-down" data-aos-delay="200" >
          <div class="row">
            <div class="col-2">
              <div class="icon-metodo-box icon-2"></div>
            </div>
            <div class="col-10">
              <h6>Site Pronto Para Mobile</h6>
              <p>80% dos acessos a internet são feitos pelo celular, e quando falamos de pesquisas no Google o número sobe pra 94%, seu site estar preparado não é uma opção.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
        <div class="metodo-box" data-aos="fade-down" data-aos-delay="300" >
          <div class="row">
            <div class="col-2">
              <div class="icon-metodo-box icon-3"></div>
            </div>
            <div class="col-10">
              <h6>Palavras-Chaves que Funcionam</h6>
              <p>Qual palavra-chave usar? Aquela que seu cliente usa, essa é a resposta. Por isso contamos com especialistas em comportamento do consumidor.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
        <div class="metodo-box" data-aos="fade-down" data-aos-delay="500" >
          <div class="row">
            <div class="col-2">
              <div class="icon-metodo-box icon-4"></div>
            </div>
            <div class="col-10">
              <h6>Foco em Conversão</h6>
              <p>Números, números e mais números, isso não nos interessa e sim se suas vendas aumentaram, visamos o seu crescimento e não apenas números mágicos.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
        <div class="metodo-box" data-aos="fade-down" data-aos-delay="500" >
          <div class="row">
            <div class="col-2">
              <div class="icon-metodo-box icon-5"></div>
            </div>
            <div class="col-10">
              <h6>Otimização e Velocidade</h6>
              <p>Seu site precisa aparecer em todo lugar, a todo momento, não importa como. Por isso esse é o nosso pilar básico</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
        <div class="metodo-box" data-aos="fade-down" data-aos-delay="600" >
          <div class="row">
            <div class="col-2">
              <div class="icon-metodo-box icon-6"></div>
            </div>
            <div class="col-10">
              <h6>Gestão de Redes Sociais</h6>
              <p>127 milhões de pessoas acessam o Facebook mensalmente no Brasil, com certeza seus clientes estão lá também.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
