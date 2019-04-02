<?php
/* Template Name: blog */
get_header();
?>
<div id="blog-intro"></div>
<section id="destaque-blog">
  <div class="container">
    <div class="col-12 mb-4 mt-4">
      <h2 class="intro-hero">Blog</h2>
    </div>
    <div class="row hot-post">
      <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 hot-post-left">
        <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 1,
                        'order' => 'asc',
                        'orderby' => 'date',
                        'category_name' => 'destaque'
                    );

                    $loop = new WP_Query( $args );
                    $i = 0;

                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="post post-thumb">
          <a class="post-img" href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title();?>">
          </a>
          <div class="post-body">
            <div class="post-category">
              <a href="<?php the_permalink(); ?>"><?php foreach((get_the_category()) as $category){
                    echo $category->name."<br>";
                    echo category_description($category);
                  } ?> da Semana</a>
            </div>
            <h3 class="post-title title-lg"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
            <p><?php echo excerpt('20'); ?></p>
          </div>
        </div>
        <?php
            $i ++;
                             if($i % 1 == 0) {
                        echo '<div class="mb-2"></div>';
                       }
                       wp_reset_query();
                endwhile;
            ?>

      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 hot-post-right">
        <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 2,
                        'order' => 'asc',
                        'orderby' => 'date',
                        'category_name' => 'novidades'
                    );

                    $loop = new WP_Query( $args );
                    $i = 0;

                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="post post-thumb">
          <a class="post-img" href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title();?>">
          </a>
          <div class="post-body">
            <div class="post-category">
              <a href="<?php the_permalink(); ?>"><?php foreach((get_the_category()) as $category){
                    echo $category->name."<br>";
                    echo category_description($category);
                    } ?></a>
            </div>
            <h3 class="post-title title-lg"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
          </div>
        </div>
        <?php
            $i ++;
                             if($i % 2 == 0) {
                        echo '<div class="mb-2"></div>';
                       }
                       wp_reset_query();
                endwhile;
            ?>
      </div>
    </div>
  </div>
</section>
<section id="posts-recentes">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
        <div class="recentes-session">
          <div class="col-12">
            <h6>Últimos Posts</h6>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
        </div>
        <div class="recentes-session">
          <div class="col-12">
            <h6>Mais Lidos</h6>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
        </div>
        <div class="recentes-session">
          <div class="col-12">
            <h6>Aumente suas<br> Vendas</h6>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-3">
            <div class="box-post">
              <img src="<?php bloginfo('template_directory');?>/img/1.jpg">
              <div class="pb-4"></div>
              <h2>Titulo</h2>
              <a href="#">Link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 col-xs-12-col-sm-12">
        <div class="box-ads mb-5">
          Ads aqui
        </div>
        <div class="form-box-blog mb-5">
          <h3>Faça um Orçamento</h3>
            <?php echo do_shortcode('[contact-form-7 id="5" title="form-baixo-banner"]'); ?>
        </div>
        <div class="box-smm mb-5">
          <h3>Siga Nossas Redes</h3>
          <div class="row no-gutters">
            <div class="col-6 smm-fb"><i class="fab fa-facebook"></i></div>
            <div class="col-6 smm-insta"><i class="fab fa-instagram"></i></div>
          </div>
        </div>
        <div class="box-cat">
          <h3>Veja o Feed</h3>
          <div class="card" style="width: 100%;">
            <div class="card-header">
              Saiba Mais
            </div>
            <ul class="list-group list-group-flush">
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
              <a href="#"><li class="list-group-item">Cras justo odio</li></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 text-center mt-5">
      <div class="ads-w">Ads Aqui</div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
