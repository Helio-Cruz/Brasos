<div class="page-membros">

  <div class="page-membros__header">
    <a href="<?php echo home_url('/membros/'); ?>"><span uk-icon="icon: reply"></span> Voltar</a>
    <a href="<?php echo wp_logout_url(home_url()); ?>" title="Logout">Sair <span uk-icon="icon: sign-out"></span></a>
  </div>

  <h1 class="uk-text-large uk-text-uppercase uk-text-center uk-margin-medium"><?php the_field('titulo_do_evento'); ?></h1>
  <hr>

  <div class="uk-height-big uk-flex uk-flex-column uk-flex-center uk-flex-middle uk-margin-medium">
    <?php the_field('video_do_evento'); ?>
    <p class="uk-margin-medium uk-width-xlarge"><?php the_field('descricao_do_evento'); ?></p>
  </div>

</div>