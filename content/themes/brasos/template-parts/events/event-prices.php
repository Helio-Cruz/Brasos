<!-- Valores de inscriçao-->
<li class="no-formating" uk-scrollspy="cls: uk-animation-slide-bottom; target: .events-word: 300; repeat: false">
    <?php if (get_field('valores_de_inscricao')) : ?>
        <div class="events-informations events-word uk-scrollspy-inview uk-animation-slide-bottom"><?php the_field('valores_de_inscricao'); ?></div>
    <?php endif; ?>

    <div class="patrocinios" style="margin: auto; text-align:center">
        <?= get_field('patrocinios'); ?>
    </div>
</li>