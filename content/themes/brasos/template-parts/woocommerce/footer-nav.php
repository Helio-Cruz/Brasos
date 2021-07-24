<!--
    <div class="account-access">
    <a class="button" href="<//?= home_url('/my-account'); ?>">Minha-Conta </a>
    <a class="button" href="<//?php echo get_permalink(get_page_by_path('eventos/BRASOStba 2021')) ?>">Pagina do Evento </a>
</div>
-->


<?php


if (get_field('patrocinio')) : ?>

    <div>
        <?php the_field('patrocinio'); ?>
    </div>

<?php endif; ?>