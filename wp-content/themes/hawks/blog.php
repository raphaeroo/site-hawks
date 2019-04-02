<?php
/* Template Name: blog */
get_header();
?>
<div id="blog-intro"></div>
<section id="destaque-blog">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12">
        <div class="box-blog-destaque-maior">
          <a href="#"><div class="hot-post">
            <img src="<?php bloginfo('template_directory')?>/img/2.jpg">
            </div></a>
            <div class="post-body">
              <h2>Titulo Aqui</h2>
              <p>Excerpt aqui</p>
              <a href="#">Veja Mais</a>
            </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12 mb-2">
        <div class="box-blog-destaque-menor">
          <div class="col-12 mb-2">Direita Cima</div>
          <div class="col-12 mb-2">Direita baixo</div>
        </div>
      </div>

    </div>
  </div>
</section>


<?php get_footer(); ?>
