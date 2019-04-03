<?php
/* Template Name: Pag-Servicos */
get_header();
?>
<section class="hero is-dark is-large" id="section-servicos-banner">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        <strong><b>Serviços</b></strong> Agência Hawks
      </h1>
      <h2 class="subtitle">
        Confira nossas soluções para seu negócio
      </h2>
    </div>
  </div>
</section>
<section id="content-servicos">
  <div class="container">
    <div class="row align-items-center" id="servico-loop">

      <?php
                  $args = array(
                      'post_type' => 'servicos',
                      'posts_per_page' => 50,
                      'order' => 'asc',
                      'orderby' => 'date'

                  );

                  $loop = new WP_Query( $args );
                  $i = 0;

                  while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="row wrap-loop">
      <div class="col-12 mb-4 text-left">
        <h2><?php echo do_shortcode('[acf field="titulo_servico"]');?></h2>
      </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
          <div class="box-img-serv">
            <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title();?>" title="<?php the_title();?>">
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
          <div class="box-content-serv">
            <h3><?php the_title();?></h3>
            <p><?php echo excerpt('30'); ?></p>
            <div class="buttons">
            <a class="button bto-mais mb-2" href="<?php the_permalink(); ?>"><b>Veja Mais</b>&nbsp;<i class="fas fa-angle-double-right"></i></a><br>
            <a class="button bto-info mb-2" href="#">Quero contratar esse!</a>
            <a class="button whats mb-2" href="#"><span class="icon is-small"><i class="fab fa-whatsapp"></i></span>
                <span>Whatsapp</span>
            </a>
          </div>

        </div>
      </div>
      </div>
      <?php
          $i ++;
                           if($i % 1 == 0) {
                      echo '<div class="mb-1"></div>';
                     }
                     wp_reset_query();
              endwhile;
          ?>

    </div>
  </div>
</section>


<?php get_footer();?>
