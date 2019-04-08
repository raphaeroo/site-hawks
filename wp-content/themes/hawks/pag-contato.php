<?php
/* Template Name: pag-contato */
get_header();
?>
<section id="topo-contato"></section>
<div class="clear" style="margin-top: 20em;"></div>
<section id="content-contato">
<div class="container">
  <div class="level">
    <div class="level-item">
      <h2 class="title">Contato</h2><br>
      <p class="subtitle">Deixe sua mensagem e entraremos em contato o mais breve possível.</p>
    </div>
  </div>
  <div class="row mt-4">
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 mb-4">
  <?php echo do_shortcode('[contact-form-7 id="42" title="form-single"]'); ?>
</div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 lado-direito-contato">
  <h2>Se preferir, ligue para nós</h2>
  <p><i class="fa fa-phone"></i> +55 (11) 942453563</p>
  <h2>Ou nos escreva</h2>
  <p><i class="fa fa-envelope"></i> contato@hawks.com.br</p>
  <div class="servicos-contato mt-5 pt-5">
    <h2>Confira nossos serviços</h2>
    <ul class="fa-ul">
  <li><span class="fa-li" ><i class="fas fa-check-square"></i></span> <a href="<?php echo site_url();?>/servicos/sites-responsivos/">Sites Responsivos</a></li>
  <li><span class="fa-li" ><i class="fas fa-check-square"></i></span> <a href="<?php echo site_url();?>/servicos/payperclick-ppc/">Google Ads</a></li>
  <li><span class="fa-li" ><i class="fas fa-check-square"></i></span> <a href="<?php echo site_url();?>/servicos/search-engine-optimization-seo/">Busca Orgânica</a></li>
  <li><span class="fa-li" ><i class="fas fa-check-square"></i></span> <a href="<?php echo site_url();?>/servicos/social-media-marketing-smm/">Gestão de Mídias Sociais</a></li>
</ul>
  </div>
</div>
  </div>
</div>
</section>
<?php get_footer();?>
