<?php get_header();?>
<section id="topo-single-servicos">
<div class="hero-servico">
  <small>Apresentamos:</small>
  <h1><?php the_title();?></h1>
</div>
</section>
<div class="clear divisor"></div>
<section id="content-servico">
  <div class="container">
    <div class="row">
    <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 mb-4 conteudo-single">
      <?php
                  if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post();
                          the_content();
                    } // end while
                  } // end if
              ?>
              <div class="clear mt-4"></div>
              <div class="orcamento-servico">
                <div class="row align-items-center">
                  <div class="col-md-4 col-sm-12">
                    <div class="img-servico-form" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);"></div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                    <div class="call-modal">
                      <h6>Não Perca Tempo!</h6>
                      <p class="subtitle">Agora é hora de usar nosso serviço de <b><?php the_title();?></b> para aumentar suas vendas.</p>
                      <a class="button bto-info" href="#">Fazer Orçamento</a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xs-12 col-xs-12 mb-4">
      <div class="servico-lado-direito">
      <h4>Mais Serviços</h4>
      <?php
                  $args = array(
                      'post_type' => 'servicos',
                      'posts_per_page' => 4,
                      'order' => 'desc',
                      'orderby' => 'rand',
                      'post__not_in' => array( get_the_ID() )
                  );

                  $loop = new WP_Query( $args );
                  $i = 0;

                  while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="card mb-3">
        <img class="card-img-top" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title();?>">
        <div class="card-body">
          <h5 class="card-title"><?php the_title();?></h5>
          <p class="card-text"><?php echo excerpt('20'); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn bto-info">Confira</a>
        </div>
      </div>

      <?php
          $i ++;
                           if($i % 4 == 0) {
                      echo '<div class="mb-2"></div>';
                     }
                     wp_reset_query();
              endwhile;
          ?>


      </div>
    </div>
  </div>
  </div>
</section>
<?php get_footer();?>
