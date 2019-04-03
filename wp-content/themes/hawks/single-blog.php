<?php get_header();?>
<section id="topo-single" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
  <div class="container">
    <div class="col-12 text-center">
      <div class="breadcrumb-single">
      <p><a href="<?php echo site_url();?>">Home</a> <i class="fas fa-caret-right"></i> <a href="<?php echo site_url();?>/blog/">Blog</a> <i class="fas fa-caret-right"></i> <?php the_title();?></p>
      </div>
    </div>
  </div>
</section>
<div class="clear"></div>
<section id="content-single">
  <div class="container">
    <div class="level align-items-center">
      <div class="level-left">
        <div class="wrap-h1">
        <h1><?php the_title();?></h1>
        </div>
      </div>
      <div class="level-right">
        <div class="wrap-meta">
      <p>Por <?php $author_id=$post->post_author; ?><?php the_author_meta( 'user_nicename' , $author_id ); ?> em <?php echo get_the_date( get_option('date_format') ); ?></p>
      </div>
    </div>
    </div>
<div class="mb-3"></div>
<div class="col-12 conteudo-single">
  <?php
              if ( have_posts() ) {
                while ( have_posts() ) {
                  the_post();
                      the_content();
                } // end while
              } // end if
          ?>
</div>
<div class="clear mb-4"></div>
<div class="row align-items-center">
<div class="col-md-6 col-sm-12">
  <?php

  $image = get_field('imagem_destaque');

  if( !empty($image) ): ?>

  	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

  <?php endif; ?>
</div>
<div class="col-md-6 col-sm-12">
<p class="acf-cta-p"><?php echo do_shortcode('[acf field="cta_single"]');?></p>
</div>
</div>
<div class="end-post pt-5"></div>
<div class="clear mb-3"></div>
<div class="row">
  <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12">
    <h2 class="mb-3">Continue Lendo</h2>
    <div class="row">
      <?php
                  $args = array(
                      'post_type' => 'blog',
                      'posts_per_page' => 4,
                      'order' => 'asc',
                      'orderby' => 'date',
                      'post__not_in' => array( get_the_ID() )
                  );

                  $loop = new WP_Query( $args );
                  $i = 0;

                  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <div class="col-md-6 col-sm-12 mb-3">
                  <a href="<?php the_permalink(); ?>">
                    <div class="box-post">
                      <img src="<?php the_post_thumbnail_url( 'large' ); ?>">
                      <div class="pb-4"></div>
                      <h2><?php the_title();?></h2>
                      <a href="<?php the_permalink(); ?>">Leia Mais</a>
                    </div></a>
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
  <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
    <h2 class="mb-3">Fale Conosco</h2>
    <?php echo do_shortcode('[contact-form-7 id="42" title="form-single"]'); ?>
  </div>
</div>
  </div>
</section>

<?php get_footer();?>
