<?php
/* Template Name: all-blog */
get_header();
?>
<section class="hero is-dark is-large" id="section-servicos-banner">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        <strong><b>Blog:</b></strong> Todos Posts
      </h1>
      <h2 class="subtitle">
        Todos nossos posts
      </h2>
    </div>
  </div>
</section>
<section id="todos-posts">
  <div class="container">
    <div class="row align-items-center">
      <?php
                  $args = array(
                      'post_type' => 'blog',
                      'posts_per_page' => 300,
                      'order' => 'desc',
                      'orderby' => 'date',

                  );

                  $loop = new WP_Query( $args );
                  $i = 0;

                  while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="card mb-3">
              <img class="card-img-top" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title();?>">
              <div class="card-body">
                <h5 class="card-title"><?php the_title();?></h5>
                <p class="card-text"><?php echo excerpt('20'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn bto-info">Leia Mais</a>
              </div>
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
</section>
<?php get_footer();?>
